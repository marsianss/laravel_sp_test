<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Hall;

class HallController extends Controller {
    // ...existing code...

    public function getHallsWithMoreThan50Seats() {
        $halls = DB::table('halls')
                    ->where('capacity', '>', 50)
                    ->get();
        return response()->json($halls);
    }

    public function getHallsWithFacilitiesEloquent() {
        $halls = Hall::with('facilities')->get();
        return response()->json($halls);
    }

    public function index() {
        $halls = Hall::with('facilities')->get();
        return view('halls.index', compact('halls'));
    }
}
