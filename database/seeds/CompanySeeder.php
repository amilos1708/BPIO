<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /* broj tvrtki koje želim generirati */
        $i = env('SEED_COMPANY_COUNT', 10);

        while($i--) {
            DB::table('companies')->insert([
                'name' => $faker->company,
                'address' => $faker->address,
                'company_phone_number' => rand(111111111,999999999),
                'country_id' => rand(1,3),
            ]);
        }
    }
}
