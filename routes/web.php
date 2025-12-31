<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/polityka-prywatnosci', function () {
    return view('privacy');
});
