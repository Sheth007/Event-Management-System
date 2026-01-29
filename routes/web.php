<?php

use App\Http\Controllers\adminLoginController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\totalUser;
use App\Models\events;
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

Route::get('/totalUsers', [totalUser::class, 'display'])->name('totalUsers');

Route::view('/events', 'events');

Route::view('/addNewEvent', 'addNewEvent')->name('ane');

Route::post('/addEvents', [eventController::class, 'newEvent'])->name('addEvents');

Route::get('/event', [eventController::class, 'displayTotalEvents'])->name('displayallevents');

Route::delete('/events/{id}', [EventController::class, 'delete'])->name('eventDelete');

Route::get('/events/{id}', [eventController::class, 'eventEdit'])->name('eventEdit');

Route::put('/events', [eventController::class, 'updateEvent'])->name('updateEvent');

Route::get('/events', [eventController::class, 'searchEvents']);