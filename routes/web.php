<?php

use App\Http\Controllers\PlaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('places', [PlaceController::class, 'create']);
Route::post('places', [PlaceController::class, 'store'])->name('place.store');
