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
        $this->call([
            CountrySeeder::class,
            RoleSeeder::class,
            PurposeSeeder::class,
            SexSeeder::class,
            UserSeeder::class,
            CompanySeeder::class,
            VehicleSeeder::class,
            VehicleRegistrationSeeder::class,
            VehicleMovementSeeder::class
        ]);
    }
}
