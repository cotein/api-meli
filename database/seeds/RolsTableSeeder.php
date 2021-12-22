<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->delete();
        
        DB::table('rols')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ADMINISTRADOR DEL SISTEMA',
                'created_at' => '2021-01-13 17:09:46',
                'updated_at' => '2021-01-13 17:09:47',
                'level' => 500,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'GERENCIA',
                'created_at' => '2021-01-13 17:10:44',
                'updated_at' => '2021-01-13 17:10:45',
                'level' => 400,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'VENTAS',
                'created_at' => '2021-01-13 17:11:16',
                'updated_at' => '2021-01-13 17:11:17',
                'level' => 100,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'COMPRAS',
                'created_at' => '2021-01-13 17:12:24',
                'updated_at' => '2021-01-13 17:12:24',
                'level' => 100,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'PRODUCCION',
                'created_at' => '2021-01-13 17:12:12',
                'updated_at' => '2021-01-13 17:12:12',
                'level' => 100,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'ADMINISTRACION',
                'created_at' => '2021-01-13 17:13:08',
                'updated_at' => '2021-01-13 17:13:09',
                'level' => 300,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'LOGISTICA',
                'created_at' => '2021-01-13 17:13:38',
                'updated_at' => '2021-01-13 17:13:39',
                'level' => 200,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'FINANZAS',
                'created_at' => '2021-01-13 17:23:40',
                'updated_at' => '2021-01-13 17:23:40',
                'level' => 300,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'RRHH',
                'created_at' => '2021-01-13 17:24:08',
                'updated_at' => '2021-01-13 17:24:08',
                'level' => 300,
            ),
        ));
    }
}
