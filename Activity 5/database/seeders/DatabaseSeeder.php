<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Car::create([
            'brand' => 'Toyota',
            'model' => 'Supra',
            'year' => 2023,
            'color' => 'Red',
            'price' => 2500000,
        ]);

        Car::create([
            'brand' => 'Honda',
            'model' => 'Civic',
            'year' => 2022,
            'color' => 'Black',
            'price' => 1800000,
        ]);
    }
}