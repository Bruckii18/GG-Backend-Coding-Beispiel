<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;
use Illuminate\Support\Facades\Http;


class AirlineController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'name' => 'required|min:1|max:30',
            'country' => 'required|min:1|max:30',
            'logo' => 'mimes:jpeg,jpg,bmp,png',
            'slogan' => '',
            'head_quaters' => '',
            'website' => '',
            'established' => 'required|min:4|max:4'
        ]);
        Airline::create([
            'name' => $request->name,
            'country' => $request->country,
            'logo' => $request->logo,
            'slogan' => $request->slogan,
            'head_quaters' => $request->head_quaters,
            'website' => $request->website,
            'established' => $request->established
        ]);
    }

    public function showAll() {
        return Airline::all();
    }

    public function showId($id) {
        $airline = Airline::findOrFail($id);
        return view('update')->with([
            'airline' => $airline
        ]);
    }

    public function update(Request $request, $id) {
        $airline = Airline::findOrFail($id);
        $airline->name = $request->name;
        $airline->save();
        return view('update')->with([
            'airline' => $airline
        ]);
    }

    public function getPassengersOfAirline(Request $request, $id) {
        $airlineById = Airline::findOrFail($id);
        $allPassengers = Http::get('https://api.instantwebtools.net/v1/passenger');
        $allPassengersData = json_decode($allPassengers);

        $passengersOfAirline = [];
        foreach ($allPassengersData->data as $data) {
            if (isset($data->airline->name)) {
                if($data->airline->name == $airlineById->name) {
                    array_push($passengersOfAirline, $data);
                }
            }
        }
        $passengersOfAirline = array_slice($passengersOfAirline, ($request->page * 50 - 1) - 49, 50);
        return $passengersOfAirline;
    }
}
