<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index(Request $request)
    {
        $query = Flight::query();

        if ($request->has('airline_id')) {
            $query->where('airline_id', $request->airline_id);
        }

        if ($request->has('departure_airport_id')) {
            $query->where('departure_airport_id', $request->departure_airport_id);
        }

        if ($request->has('arrival_airport_id')) {
            $query->where('arrival_airport_id', $request->arrival_airport_id);
        }

        if ($request->has('departure_date')) {
            $query->where('departure_date', $request->departure_date);
        }

        $flights = $query->with(['airline', 'departureAirport', 'arrivalAirport'])->get();

        return response()->json($flights);
    }
}
