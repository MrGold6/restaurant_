<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


//admin_test_view

Route::get('/booking', function () {   // change on booking
    return view('admin/tables/booking');
});

Route::get('/Admin/Home', [AdminController::class, 'home'])->name('home');
Route::get('/Admin/Table', [AdminController::class, 'table'])->name('table');
Route::get('/Admin/Group', [AdminController::class, 'group'])->name('group');
Route::get('/Admin/Dish', [AdminController::class, 'dish'])->name('Dish');



Route::get('/home', [AdminController::class, 'home']);
Route::get('/table', [AdminController::class, 'table']);
Route::get('/group', [AdminController::class, 'group']);
Route::get('/dish', [AdminController::class, 'dish']);

Route::get('/group', function () {
    return view('admin/tables/group');
});

Route::get('/dish', function () {
    return view('admin/tables/dish');
});



//user_test_view

Route::get('/', [UserController::class, 'home']);
