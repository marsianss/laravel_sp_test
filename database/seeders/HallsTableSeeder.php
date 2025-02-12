<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('halls')->insert([
            ['name' => 'Hall A', 'capacity' => 100],
            ['name' => 'Hall B', 'capacity' => 30],
            // Add more sample data as needed
        ]);
    }
}
