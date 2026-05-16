<?php

use Illuminate\Support\Facades\Route;

Route::get('/cars', function () {

    return [
        [
            'brand' => 'Toyota',
            'model' => 'Supra'
        ],

        [
            'brand' => 'Honda',
            'model' => 'Civic'
        ]
    ];

});