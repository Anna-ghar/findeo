<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            ['feature_name' => 'Air Conditioning'],
            ['feature_name' => 'Swimming Pool'],
            ['feature_name' => 'Central Heating'],
            ['feature_name' => 'Laundry Room'],
            ['feature_name' => 'Gym'],
            ['feature_name' => 'Alarm'],
            ['feature_name' => 'Window Covering'],
        ];
        foreach ($features as $feature) {
            Feature::create($feature);
        }

    }
}
