<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\Saran;


Route::get('/', function () {
    return view('masterdash');
});

route::get('/reg', [AuthController::class, 'showRegistration'])->name('reg');
route::post('/reg/submit', [AuthController::class, 'submitRegistration'])->name('submit');

route::get('/login', [AuthController::class, 'showLogin'])->name('login');
route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('logmit');

route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/detail', function () {
    return view('masterdetail');
}); 

route::get('/user', [BlogController::class, 'User'])->name('user');
route::post('/user/submit', [BlogController::class, 'submitUser'])->name('sermit');

route::get('/table', [BlogController::class, 'index'])->name('table');
route::get('/delete/{id}',[BlogController::class, 'delete'])->name('delete');

