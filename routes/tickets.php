<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/tickets', function () {
    return response()->json(['message' => 'Welcome to the TICKETS Section of EventLink']);
});

Route::get('/tickets/all', [TicketController::class, 'getAll']);
Route::get('/tickets/{id}', [TicketController::class, 'getById']);
Route::post('/tickets/create', [TicketController::class, 'create']);
Route::put('/tickets/update/{id}', [TicketController::class, 'update']);
Route::delete('/tickets/del/{id}', [TicketController::class, 'deleteById']);
