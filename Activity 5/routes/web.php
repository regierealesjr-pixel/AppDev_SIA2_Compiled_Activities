<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;

Route::get('/', function () {

    if (auth()->check()) {

        if (auth()->user()->role == 'admin') {
            return redirect('/admin/dashboard');
        }

        return redirect('/user/dashboard');
    }

    return redirect('/login');
});

Route::get('/dashboard', function () {

    if (Auth::user()->role == 'admin') {
        return redirect('/admin/dashboard');
    }

    return redirect('/user/dashboard');

})->middleware(['auth'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth']);

Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth']);

Route::get('/cars-api', function () {

    return response()->json([

        [
            'brand' => 'Toyota',
            'model' => 'Supra',
            'year' => 2023
        ],

        [
            'brand' => 'Honda',
            'model' => 'Civic',
            'year' => 2022
        ]

    ]);

});

Route::get('/posts', [PostController::class, 'index']);

require __DIR__.'/auth.php';