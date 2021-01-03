<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            ['brand' => 'BMW', 'model' => '3', 'fuel_type' => 'dizel', 'produced_at' => rand(2010, 2020), 'company_id' => rand(1, 10)],
            ['brand' => 'Audi', 'model' => 'A3', 'fuel_type' => 'dizel', 'produced_at' => rand(2010, 2020), 'company_id' => rand(1, 10)],
            ['brand' => 'Mercedes', 'model' => 'A klasa', 'fuel_type' => 'benzin', 'produced_at' => rand(2010, 2020), 'company_id' => rand(1, 10)],
        ]);
    }
}
