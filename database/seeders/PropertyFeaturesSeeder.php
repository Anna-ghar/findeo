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
            ['name' => 'Air Conditioning'],
            ['name' => 'Swimming Pool'],
            ['name' => 'Central Heating'],
            ['name' => 'Laundry Room'],
            ['name' => 'Gym'],
            ['name' => 'Alarm'],
            ['name' => 'Window Covering'],
        ];
        foreach ($features as $feature) {
            Feature::create($feature);
        }

    }
}
