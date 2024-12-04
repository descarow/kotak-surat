<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

Route::get('/login', function () {
    return view('authlogin');
});

Route::get('/reg', function () {
    return view('authreg');
});

Route::get('/main', function () {
    return view('main');
});

// route::get('/', [HomeController::class, 'index']);
