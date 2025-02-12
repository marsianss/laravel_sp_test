use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallFacilitySeeder extends Seeder {
    public function run(): void {
        // ...existing code...

        // Voeg faciliteiten toe
        DB::table('facilities')->insert([
            // ...existing code...
            ['name' => 'Whiteboard'],
        ]);

        // Koppel faciliteiten aan zalen
        DB::table('hall_facility')->insert([
            // ...existing code...
            ['hall_id' => 2, 'facility_id' => 4], // Vergaderruimte A - Whiteboard
        ]);
    }
}
