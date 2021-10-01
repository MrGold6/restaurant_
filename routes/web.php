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
use App\Http\Middleware\CheckAdminAuth;


//admin_test_view
Route::get('/Admin/Home', [AdminController::class, 'home'])->name('AdminHome');
Route::get('/Admin/Table', [AdminController::class, 'table'])->name('AdminTable');
Route::get('/Admin/Group', [AdminController::class, 'group'])->name('AdminGroup');
Route::get('/Admin/Dish', [AdminController::class, 'dish'])->name('AdminDish');
Route::get('/Admin/Auth', [AdminController::class, 'auget'])->name('AdminIn');
Route::get('/Admin/TodayBooking', [AdminController::class, 'todayBooking'])->name('AdminTodayBooking');
Route::post('/Admin/Auth', [AdminController::class, 'auth'])->name('AdminAuth'); //где get для auth???



//user_test_view
Route::get('/', [UserController::class, 'home'])->name('home');
Route::post('/home', [UserController::class, 'reserveTable'])->name('bookTable');
