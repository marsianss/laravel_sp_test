<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('facilities')->insert([
            ['name' => 'Projector'],
            ['name' => 'Sound System'],
            ['name' => 'Whiteboard'],
            // Add more sample data as needed
        ]);
    }
}
