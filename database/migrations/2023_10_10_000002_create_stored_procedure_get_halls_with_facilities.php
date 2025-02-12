<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateStoredProcedureGetHallsWithFacilities extends Migration
{
    public function up()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS get_halls_with_facilities');
        DB::unprepared('
            CREATE PROCEDURE get_halls_with_facilities()
            BEGIN
                SELECT halls.*, facilities.name as facility_name
                FROM halls
                LEFT JOIN facilities ON halls.id = facilities.hall_id;
            END
        ');
    }

    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS get_halls_with_facilities');
    }
}
