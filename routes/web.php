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


//AdminsRoute
Route::get('/Admin/Home', [AdminController::class, 'home'])->name('AdminHome');
Route::get('/Admin/Table', [AdminController::class, 'table'])->name('AdminTable');
Route::get('/Admin/Group', [AdminController::class, 'group'])->name('AdminGroup');
Route::get('/Admin/Dish', [AdminController::class, 'dish'])->name('AdminDish');
Route::get('/Admin/Logout', [AdminController::class, 'logout'])->name('AdminOut');
Route::get('/Admin/LogIn', [AdminController::class, 'login'])->name('AdminIn');
Route::get('/Admin/TodayBooking', [AdminController::class, 'todayBooking'])->name('AdminTodayBooking');

//Route::get('/Admin/Login', [AdminController::class, 'login'])->name('AdminLogin'); //Повернення view з входом (Не нада, в CheckAdminAuth перевірка на авторизацію (При звернені до любих функцій, перевірка в конструкторі), якщо кукі немає, то автоматично перейде на сторінку входу)
Route::post('/Admin/Auth', [AdminController::class, 'auth'])->name('AdminAuth'); //Вхід і запис у кукі

Route::post('/Admin/createDish', [AdminController::class, 'createDish'])->name('AdminCreateDish');
Route::post('/Admin/createDishGroup', [AdminController::class, 'createDishGroup'])->name('AdminCreateDishGroup');
Route::post('/Admin/createTable', [AdminController::class, 'createTable'])->name('AdminCreateTable');

Route::post('/Admin/updateBooking', [AdminController::class, 'updateBooking'])->name('AdminUpdateBooking');
Route::post('/Admin/updateDish', [AdminController::class, 'updateDish'])->name('AdminUpdateDish');
Route::post('/Admin/updateDishGroup', [AdminController::class, 'updateDishGroup'])->name('AdminUpdateDishGroup');
Route::post('/Admin/updateTable', [AdminController::class, 'updateTable'])->name('AdminUpdateTable');

Route::get('/Admin/createBookingView', [AdminController::class, 'createBookingView'])->name('AdminCreateBookingView');
Route::get('/Admin/createDishView', [AdminController::class, 'createDishView'])->name('AdminCreateDishView');
Route::get('/Admin/createDishGroupView', [AdminController::class, 'createDishGroupView'])->name('AdminCreateDishGroupView');
Route::get('/Admin/createTableView', [AdminController::class, 'createTableView'])->name('AdminCreateTableView');

Route::get('/Admin/updateBookingView/{id}', [AdminController::class, 'updateBookingView'])->name('AdminUpdateBookingView');
Route::get('/Admin/updateDishView/{id}', [AdminController::class, 'updateDishView'])->name('AdminUpdateDishView');
Route::get('/Admin/updateDishGroupView/{id}', [AdminController::class, 'updateDishGroupView'])->name('AdminUpdateDishGroupView');
Route::get('/Admin/updateTableView/{id}', [AdminController::class, 'updateTableView'])->name('AdminUpdateTableView');

Route::post('/Admin/completeBooking', [AdminController::class, 'completeBooking'])->name('AdminCompleteBooking');
Route::get('/Admin/deleteBooking/{id}', [AdminController::class, 'deleteBooking'])->name('AdminDeleteBooking');
Route::get('/Admin/deleteDish/{id}', [AdminController::class, 'deleteDish'])->name('AdminDeleteDish');
Route::get('/Admin/deleteDishGroup/{id}', [AdminController::class, 'deleteDishGroup'])->name('AdminDeleteDishGroup');
Route::get('/Admin/deleteTable/{id}', [AdminController::class, 'deleteTable'])->name('AdminDeleteTable');




//UsersRoute
Route::get('/', [UserController::class, 'home'])->name('home');
Route::post('/home', [UserController::class, 'reserveTable'])->name('bookTable');
Route::post('/Admin/createBooking', [UserController::class, 'createBooking'])->name('createBooking');
