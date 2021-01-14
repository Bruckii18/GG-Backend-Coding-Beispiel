<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Airline;
use Illuminate\Support\Facades\Http;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Http::get('https://api.instantwebtools.net/v1/airlines');
        $data = json_decode($json);

        foreach ($data as $airline) {
            if (isset($airline->id)) {
                $id = $airline->id;
            } else {
                $id = null;
            }
            if (isset($airline->name)) {
                $name = $airline->name;
            } else {
                $name = null;
            }
            if (isset($airline->country)) {
                $country = $airline->country;
            } else {
                $country = null;
            }
            if (isset($airline->logo)) {
                $logo = $airline->logo;
            } else {
                $logo = null;
            }
            if (isset($airline->slogan)) {
                $slogan = $airline->slogan;
            } else {
                $slogan = null;
            }
            if (isset($airline->head_quaters)) {
                $head_quaters = $airline->head_quaters;
            } else {
                $head_quaters = null;
            }
            if (isset($airline->website)) {
                $website = $airline->website;
            } else {
                $website = null;
            }
            if (isset($airline->established)) {
                $established = $airline->established;
            } else {
                $established = null;
            }

            Airline::create(array(
                'id' => $id,
                'name' => $name,
                'country' => $country,
                'logo' => $logo,
                'slogan' => $slogan,
                'head_quaters' => $head_quaters,
                'website' => $website,
                'established' => $established
            ));
        }
    }
}
