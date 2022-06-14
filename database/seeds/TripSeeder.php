<?php

use Illuminate\Database\Seeder;

use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = [
            [
                'destination' => 'Iceland',
                'duration' => 14,
                'price' => 2500,
                'image' => 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F28%2F2019%2F11%2Fnorthern-lights-kirkjufell-mountain-snaefellsnes-iceland-ICELANDLIGHTS1218.jpg',
                'places' => 30,
            ],
            [
                'destination' => 'Lido Adriano',
                'duration' => 7,
                'price' => 650,
                'image' => 'https://www.turismo.ra.it/wp-content/uploads/2021/01/ravenna-lido-adriano.jpg',
                'places' => 15,
            ],
            [
                'destination' => 'Milano',
                'duration' => 7,
                'price' => 999,
                'image' => 'https://static.open.online/wp-content/uploads/2020/03/MILANO-TAG.jpg',
                'places' => 22,
            ],
            # Fill the data, then copy paste to add more entries.
        ];

        foreach ($trips as $trip) {
            $new_trip = new Trip();
            $new_trip->destination = $trip['destination'];
            $new_trip->duration = $trip['duration'];
            $new_trip->price = $trip['price'];
            $new_trip->image = $trip['image'];
            $new_trip->places = $trip['places'];
        }
    }
}
