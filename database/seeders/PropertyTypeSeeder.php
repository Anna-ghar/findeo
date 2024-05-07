<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Apartment'],
            ['name' => 'House'],
            ['name' => 'Commerical'],
            ['name' => 'Garage'],
            ['name' => 'Lot'],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
