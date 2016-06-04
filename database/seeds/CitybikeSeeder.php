<?php

use Illuminate\Database\Seeder;

class CitybikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city_bikes')->delete();
        $json = File::get("database/data/city_bikes.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            CityBike::create(array(
                'stationName' => $obj->stationName,
                'availableDocks' => $obj->availableDocks,
                'totalDocks' => $obj->totalDocks,
                'latitude' => $obj->latitude,
                'longitude' => $obj->longitude,
                'statusValue' => $obj->statusValue,
                'statusKey' => $obj->statusKey,
                'stAddress1' => $obj->stAddress1,
                'stAddress2' => $obj->stAddress2,
                'city' => $obj->city,
                'postalCode' => $obj->postalCode,
                'location' => $obj->location,
                'altitude' => $obj->altitude,
                'testStation' => $obj->testStation,
                'landMark' => $obj->landMark,
            ));
        }
    }
}
