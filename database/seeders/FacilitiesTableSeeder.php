<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('facilities')->insert([
            ['hall_id' => 1, 'name' => 'Projector'],
            ['hall_id' => 1, 'name' => 'Sound System'],
            ['hall_id' => 2, 'name' => 'Whiteboard'],
            // Add more sample data as needed
        ]);
    }
}
