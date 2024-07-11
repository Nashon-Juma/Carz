<?php

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        $features = [
            'Airconditions',
            'Child Seat',
            'GPS',
            'Luggage',
            'Music',
            'Seat Belt',
            'Sleeping Bed',
            'Water',
            'Bluetooth',
            'Onboard computer',
            'Audio input',
            'Long Term Trips',
            'Car Kit',
            'Remote central locking',
            'Climate control',
        ];

        foreach ($features as $feature) {
            Feature::create(['name' => $feature]);
        }
    }
}
