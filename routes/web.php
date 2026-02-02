<?php

use App\Http\Controllers\adminLoginController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\totalUser;
use App\Models\events;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Livewire\Event;

// Route::get('/abcd', Event::class);

Route::get('/events', function () {
    return view('events.index');  // Rendering the Blade view that includes the Livewire component
});

// ---------- ADMIN STARTS ----------

// Route::view('admin', 'adminLogin');

Route::view('admin', 'adminLogin')->name('login');

Route::post('/admin', [adminLoginController::class, 'Validate'])->name('adminLogin');

Route::post('/new', [adminLoginController::class, 'newUser'])->name('newadmin');

Route::get('/logout', [adminLoginController::class, 'logout'])->name('logout.controller');

Route::view('adminPasswordReset', 'adminPasswordReset');

Route::post('/adminPasswordReset', [adminLoginController::class, 'resetPassword'])->name('adminPassword.reset');

Route::get('/totalUsers', [totalUser::class, 'display'])->name('totalUsers');

// ---------- ADMIN ENDS ----------

// ---------- EVENTS STARTS ----------

Route::view('/events', 'events');

Route::view('/addNewEvent', 'addNewEvent')->name('ane');

Route::post('/addEvents', [eventController::class, 'newEvent'])->name('addEvents');

Route::get('/event', [eventController::class, 'displayTotalEvents'])->name('displayallevents');

Route::delete('/events/{id}', [EventController::class, 'delete'])->name('eventDelete');

Route::get('/events/{id}', [eventController::class, 'eventEdit'])->name('eventEdit');

Route::put('/events', [eventController::class, 'updateEvent'])->name('updateEvent');

Route::get('/events', [eventController::class, 'searchEvents']);

Route::get('/recentEvents', [eventController::class, 'recentEvents'])->name('diaplyRecent.events');

// ---------- EVENTS ENDS ----------

// ---------- CATEGORIES START ----------

Route::view('/category', 'category');

Route::get('/newCategory', function () {
    return view('addNewCategory');
})->name('add-new-category');

Route::post('/addNewCategory', [categoryController::class, 'newCategory'])->name('addNew.Category');

Route::get('/displayAllCategory', [categoryController::class, 'displayTotalCategory'])->name('viewall.Category');

Route::get('/UpdateCategory/{id}', [categoryController::class, 'updateCategoryid'])->name('getcategory.id');

Route::put('/UpdateCategoryData', [categoryController::class, 'updateCategoryData'])->name('updateCategory.data');

Route::delete('/DeleteCategory/{id}', [categoryController::class, 'deleteCategory'])->name('delete.Category');

// ---------- CATEGORIES ENDS ----------

// ---------- REGISTRATION STARTS ----------

Route::get('/showRegistrations', [registrationController::class, 'diaplyRegistration'])->name('displyall.registrations');

Route::get('/reventEvnets', [registrationController::class, 'recentEventsRegi'])->name('recent.event.and.regi');

Route::get('registration/export/', [registrationController::class, 'excelExport'])->name('export');

Route::post('filterbyevents', [registrationController::class, 'filterEvents'])->name('filter.events');

// ---------- REGISTRATION ENDS ----------