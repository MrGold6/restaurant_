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

<<<<<<< HEAD
//admin_test_view
Route::get('/Admin/Home', [AdminController::class, 'home'])->name('home');
Route::get('/Admin/Table', [AdminController::class, 'table'])->name('table');
Route::get('/Admin/Group', [AdminController::class, 'group'])->name('group');
Route::get('/Admin/Dish', [AdminController::class, 'dish'])->name('Dish');
=======

Route::get('/', [AdminController::class, 'home']);
Route::get('/table', [AdminController::class, 'table']);
Route::get('/group', [AdminController::class, 'group']);
Route::get('/dish', [AdminController::class, 'dish']);

>>>>>>> 6d3a04dc53cbc2a7f4cd2caa32f380778ba6161f
