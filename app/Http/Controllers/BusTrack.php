<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BusLocation;
use App\Models\BusRoute;


class BusTrack extends Controller
{
    public function TrackBus($bus_no)
    {
        $busLocation = $this->getBusLocation($bus_no);
        return view('trackbus', compact('busLocation'));
    }
    

    public function getBusLocation($bus_no)
    {
        $busLocation = DB::table('bus_location')->where('bus_no', $bus_no)->get();
        return $busLocation;
    }

    public function updateLocation(Request $request, $bus_no)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        // Check if the bus exists in the "busroutes" table
        $busExists = DB::table('busroutes')->where('bus_no', $bus_no)->exists();

        if ($busExists) {
            // Check if a record with the given bus_no already exists in the "bus_location" table
            $existingRecord = DB::table('bus_location')->where('bus_no', $bus_no)->first();

            if ($existingRecord) {
                // Update the existing record with the new location
                DB::table('bus_location')
                    ->where('bus_no', $bus_no)
                    ->update([
                        'latitude' => $latitude,
                        'longitude' => $longitude,
                        'updated_at' => now(),
                    ]);
            } else {
                // Create a new record if it doesn't exist
                DB::table('bus_location')->insert([
                    'bus_no' => $bus_no,
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            return response()->json(['message' => 'Success']);
        } else {
            // Bus not found in "busroutes" table, return a warning
            return response()->json(['error' => 'Bus not found'], 404);
        }
    }
}
