<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IvaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('ivas')->delete();
        
        DB::table('ivas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'afip_code' => '0',
                'name' => 'No Corresponde',
                'percentage' => '0',
            ),
            1 => 
            array (
                'id' => 2,
                'afip_code' => '1',
                'name' => 'No Gravado',
                'percentage' => '0',
            ),
            2 => 
            array (
                'id' => 3,
                'afip_code' => '2',
                'name' => 'Exento',
                'percentage' => '0',
            ),
            3 => 
            array (
                'id' => 4,
                'afip_code' => '3',
                'name' => '0%',
                'percentage' => '0',
            ),
            4 => 
            array (
                'id' => 5,
                'afip_code' => '4',
                'name' => '10,50%',
                'percentage' => '10.5',
            ),
            5 => 
            array (
                'id' => 6,
                'afip_code' => '5',
                'name' => '21%',
                'percentage' => '21',
            ),
            6 => 
            array (
                'id' => 7,
                'afip_code' => '6',
                'name' => '27%',
                'percentage' => '27',
            ),
            7 => 
            array (
                'id' => 8,
                'afip_code' => '7',
                'name' => 'Gravado',
                'percentage' => '0',
            ),
            8 => 
            array (
                'id' => 9,
                'afip_code' => '8',
                'name' => '5%',
                'percentage' => '5',
            ),
            9 => 
            array (
                'id' => 10,
                'afip_code' => '9',
                'name' => '2,50%',
                'percentage' => '2.5',
            ),
        ));
        
        
    }
}