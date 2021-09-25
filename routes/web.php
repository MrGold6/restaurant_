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
Route::get('/', [AdminController::class, 'home']);
Route::get('/table', [AdminController::class, 'table']);
Route::get('/group', [AdminController::class, 'group']);
Route::get('/dish', [AdminController::class, 'dish']);
