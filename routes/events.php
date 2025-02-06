<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/events', function () {
    return response()->json(['message' => 'Welcome to the EVENTS Section of EventLink']);
});

Route::get('/events/all', [EventController::class, 'getAll']);
Route::get('/events/{id}', [EventController::class, 'getById']);
Route::post('/events/create', [EventController::class, 'create']);
Route::put('/events/update/{id}', [EventController::class, 'update']);
Route::delete('/events/del/{id}', [EventController::class, 'deleteById']);

