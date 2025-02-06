<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the EventLink your Event Management System!']);
});

// Path to other routers(routes)
require __DIR__.'/users.php';
require __DIR__.'/events.php';
require __DIR__.'/tickets.php';
require __DIR__.'/bookings.php';
