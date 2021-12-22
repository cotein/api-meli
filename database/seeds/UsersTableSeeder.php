<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'DIEGO',
                'last_name' => 'BARRUETA',
                'email' => 'diego@diego.com',
                'password' => '$2y$10$KM3JdffEFGOU7nSB9j8GYOcTEnGL3p1rkIzQb40Y9YQRdBFoLGwR2',
                'active' => 1,
                'rol_id' => 1,
                'company_id' => 1,
                'created_at' => '2021-03-11 14:12:38',
                'updated_at' => '2021-07-08 17:12:09',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'MARCELO',
                'last_name' => 'CALLAO',
                'email' => 'marcelo.callao@piamondsa.com.ar',
                'password' => '$2y$10$KM3JdffEFGOU7nSB9j8GYOcTEnGL3p1rkIzQb40Y9YQRdBFoLGwR2',
                'active' => 1,
                'rol_id' => 3,
                'company_id' => 1,
                'created_at' => '2021-03-11 14:12:38',
                'updated_at' => '2021-07-08 17:12:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}