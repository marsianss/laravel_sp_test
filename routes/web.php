<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
});

Route::get('/halls/more-than-50-seats', [HallController::class, 'getHallsWithMoreThan50Seats']);
Route::get('/halls/eloquent', [HallController::class, 'getHallsWithFacilitiesEloquent']);
Route::get('/halls', [HallController::class, 'index'])->name('halls.index');
