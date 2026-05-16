<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    private $cars = [

        [
            'id' => 1,
            'name' => 'Toyota Supra',
            'brand' => 'Toyota',
            'price' => '₱4,500,000',
            'type' => 'Sports Car',
            'year' => '2024',
            'description' => 'A high-performance sports car known for speed and aggressive design.',
            'image' => 'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=800&q=80'
        ],

        [
            'id' => 2,
            'name' => 'Ford Mustang',
            'brand' => 'Ford',
            'price' => '₱3,800,000',
            'type' => 'Muscle Car',
            'year' => '2023',
            'description' => 'An iconic American muscle car with powerful engine performance.',
            'image' => 'https://images.unsplash.com/photo-1584345604476-8ec5e12e42dd?auto=format&fit=crop&w=800&q=80'
        ],

        [
            'id' => 3,
            'name' => 'Honda Civic Type R',
            'brand' => 'Honda',
            'price' => '₱3,200,000',
            'type' => 'Performance Sedan',
            'year' => '2024',
            'description' => 'A sporty sedan designed for speed and everyday driving comfort.',
            'image' => 'https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?auto=format&fit=crop&w=800&q=80'
        ],

        [
            'id' => 4,
            'name' => 'Nissan GT-R',
            'brand' => 'Nissan',
            'price' => '₱7,000,000',
            'type' => 'Super Car',
            'year' => '2023',
            'description' => 'A legendary Japanese supercar famous for speed and advanced technology.',
            'image' => 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=800&q=80'
        ],

        [
            'id' => 5,
            'name' => 'BMW M4',
            'brand' => 'BMW',
            'price' => '₱6,500,000',
            'type' => 'Luxury Sports',
            'year' => '2024',
            'description' => 'A luxury performance coupe with premium design and strong engine power.',
            'image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=800&q=80'
        ]

    ];

    public function index()
    {
        $cars = $this->cars;

        return view('cars.index', compact('cars'));
    }

    public function show($id)
    {
        $car = collect($this->cars)->firstWhere('id', $id);

        if (!$car) {
            abort(404);
        }

        return view('cars.show', compact('car'));
    }
}