<?php

namespace App\Src\ExternalServices\Arba;

use SimpleXMLElement;
use App\Src\Traits\DateFormatTrait;
use Illuminate\Support\Facades\File;

class Arba
{
    use DateFormatTrait;

    const DFESERVICIO_CONSULTA = '/Xml/DFEServicioConsulta';
    
    const DFESERVICIO_CONSULTA_CON_CUIT = '/Xml/DFEServicioConsultaConCUIT.xml';

    const ARBA_URL = 'https://dfe.arba.gov.ar/DomicilioElectronico/SeguridadCliente/dfeServicioConsulta.do';
    
    protected $path;

    public function __construct()
    {
        $this->path = dirname(__FILE__);   
    }

    public function xml_create($cuit)
	{
		$ruta=$this->path.self::DFESERVICIO_CONSULTA_CON_CUIT;

		$xml=simplexml_load_file($this->path.self::DFESERVICIO_CONSULTA . '.xml');

		$xml->fechaDesde = $this->FirstDayActualMonth()->format('Ymd');

		$xml->fechaHasta = $this->LastDayActualMonth()->format('Ymd');

		$xml->contribuyentes->contribuyente->cuitContribuyente=$cuit;

		$xml->asXml($ruta);

		$md5=md5(file_get_contents($ruta));

		rename($this->path.self::DFESERVICIO_CONSULTA_CON_CUIT, $this->path.self::DFESERVICIO_CONSULTA . '_' . $md5 . '.xml');

		return $this->path.self::DFESERVICIO_CONSULTA . '_' . $md5 . '.xml';
    }
    
	public function setData($xml_file)
	{
		return [
			'user' 		=> env('CUIT'),
			'password'  => env('ARBA_CLAVE'),
			'file'		=> curl_file_create($xml_file)
		];
	}

	public function setCURL( $data )
	{
		$ch = curl_init();
        
		curl_setopt($ch, CURLOPT_URL, self::ARBA_URL);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type' => 'multipart/form-data']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 4);
		curl_setopt($ch, CURLOPT_POSTFIELDS,  $data);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLINFO_HEADER_OUT, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        $result = curl_exec($ch);
		
		curl_close($ch);

		return $result;
	}

    public function alicuota_sujeto($cuit)
	{
		$xml_file = $this->xml_create($cuit);

        $data = $this->setData($xml_file);

        $result = $this->setCURL($data);

		File::delete($xml_file);

		$xml = new SimpleXMLElement($result);

		$this->checkErrors($xml);

  	    return $xml;

	}	

	public function checkErrors($response)
	{	
		$result = (array) $response;

		collect($result)->keys()->map(function($i) use ($result) {

			if( substr($i, -5)=== 'Error' ){
				throw new \Exception($result['tipoError'], $result['codigoError']);
			}

		});
	}

	public function getAlicuota($arba_response)
	{
		$response = (array)$arba_response;

		if ((int)$response['cantidadContribuyentes'] > 1) {
			throw new \Exception('Existe más de un contribuyente con esa CUIT', 555);
		}

		$contribuyente = (array)$response['contribuyentes']->contribuyente;

		return (float)$contribuyente['alicuotaPercepcion'];
	}
}
