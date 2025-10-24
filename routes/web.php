<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cv');
});

Route::get('/cv', function () {
    return view('cv');
});


