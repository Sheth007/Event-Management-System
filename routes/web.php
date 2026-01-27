<?php

use App\Http\Controllers\adminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('admin', 'adminLogin');

Route::post('/admin', [adminLoginController::class, 'Validate'])->name('adminLogin');

// Route::view('/new', 'newadmin');

Route::post('/new', [adminLoginController::class, 'newUser'])->name('newadmin');