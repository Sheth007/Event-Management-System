<?php

use App\Http\Controllers\adminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('admin', 'adminLogin');

Route::post('/admin', [adminLoginController::class, 'Validate'])->name('adminLogin');

Route::post('/new', [adminLoginController::class, 'newUser'])->name('newadmin');

Route::get('/logout', [adminLoginController::class, 'logout'])->name('logout.controller');

Route::view('adminPasswordReset', 'adminPasswordReset');

Route::post('/adminPasswordReset', [adminLoginController::class, 'resetPassword'])->name('adminPassword.reset');