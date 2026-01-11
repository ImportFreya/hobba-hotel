<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/manutencao', function () {
    return view('maintenance');
});

Route::get('/registro', function () {
    return view('register');
});