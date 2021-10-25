<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\HealthTracker;



class HealthTrackerControllerAPI extends Controller
{
    public function index()
    {
        $healthtracker = HealthTracker::all();

        return response()->json(['health_track'=>$healthtracker],200);
    }
}
