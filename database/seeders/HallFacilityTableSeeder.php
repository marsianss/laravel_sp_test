<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallFacilityTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('hall_facility')->insert([
            ['hall_id' => 1, 'facility_id' => 1],
            ['hall_id' => 1, 'facility_id' => 2],
            ['hall_id' => 2, 'facility_id' => 3],
            // Add more sample data as needed
        ]);
    }
}
