<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        $posts = [

            [
                'title' => 'Toyota Supra 2025',
                'body' => 'The Toyota Supra is one of the most popular sports cars in CarHub.'
            ],

            [
                'title' => 'Honda Civic Type R',
                'body' => 'The Honda Civic Type R offers speed, style, and performance.'
            ],

            [
                'title' => 'Nissan GTR',
                'body' => 'The Nissan GTR is known as Godzilla because of its power.'
            ],

            [
                'title' => 'Ford Mustang',
                'body' => 'The Ford Mustang remains an iconic muscle car.'
            ]

        ];

        return view('posts', compact('posts'));
    }
}