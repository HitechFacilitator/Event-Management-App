<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//UserDashboard Page
Route::get('/user', function () {
    return view('userDashboard');
});

Route::get('/optionBox', function () {
    return view('components.optionBox');
});

Route::get('/searchBox', function () {
    return view('components.searchBox');
});

Route::get('/profileBox', function () {
    return view('components.profileBox');
});

Route::get('/logoBox', function () {
    return view('components.logoBox');
});

Route::get('/sideBar', function () {
    return view('components.sideBar');
});

Route::get('/buttonBox', function () {
    return view('components.buttonBox');
});

Route::get('/eventCard', function () {
    return view('components.eventCard');
});