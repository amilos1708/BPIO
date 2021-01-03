<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class VehicleMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* broj kretanja koje želim generirati */
        $i = env('SEED_MOVEMENT_COUNT', 14);

        while($i--) {
            DB::table('vehicle_movements')->insert([
                'date_start_moving' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'date_stop_moving' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'note' => $faker->text($maxNbChars = 50),
                'beginning_km' => rand(1948,99999),
                'fuel_status' =>rand(1, 8),
                'user_id' => 1,
                'vehicle_id' => rand(1, 3),
                'purpose_id' => rand(1, 3),
            ]);
        }
    }
}

