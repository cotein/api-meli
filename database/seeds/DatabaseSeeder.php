<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\IvaTableSeeder::class);
        $this->call(\BrandTableSeeder::class);
        $this->call(\StatusTableSeeder::class);
        $this->call(\RolsTableSeeder::class);
        $this->call(\UsersTableSeeder::class);
        $this->call(\SupplierTableSeeder::class);
        $this->call(\CategoryTableSeeder::class);
        $this->call(\ProductTableSeeder::class);
    }
}
