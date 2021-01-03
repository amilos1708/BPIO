<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purposes')->insert([
            ['name' => 'registracija'],
            ['name' => 'poslovni_put'],
            ['name' => 'privatne_svrhe'],
        ]);
    }
}
