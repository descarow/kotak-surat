<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('masterdash');
});

Route::get('/login', function () {
    return view('masterlogin');
});

Route::get('/reg', function () {
    return view('masterreg');
});

Route::get('/table', function () {
    return view('mastertable');
});

// route::get('/', [HomeController::class, 'index']);
