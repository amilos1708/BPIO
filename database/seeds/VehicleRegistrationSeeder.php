<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class VehicleRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* broj registracija koje želim generirati */
        $i = env('SEED_REGISTRATION_COUNT', 4);

        while($i--) {
            DB::table('vehicle_registrations')->insert([
                'date_registration' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'note' => $faker->text($maxNbChars = 50),
                'user_id' => 1,
                'vehicle_id' => rand(1,3),
            ]);
        }
    }
}
