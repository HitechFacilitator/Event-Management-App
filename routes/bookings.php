<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/bookings', function () {
    return response()->json(['message' => 'Welcome to the BOOKINGS Section of EventLink']);
});

Route::get('/bookings/all', [BookingController::class, 'getAll']);
Route::post('/bookings/create', [BookingController::class, 'create']);
Route::get('/bookings/{id}', [BookingController::class, 'getById']);
Route::put('/bookings/update/{id}', [BookingController::class, 'update']);
Route::delete('/bookings/del/{id}', [BookingController::class, 'deleteById']);

