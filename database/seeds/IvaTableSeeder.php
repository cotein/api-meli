<?php

use App\Src\Models\Iva;
use Illuminate\Database\Seeder;

class IvaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Iva::class, 2)->create();
    }
}
