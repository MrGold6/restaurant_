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

//admin_test_view
Route::get('/booking', function () {   // change on booking
    return view('admin/tables/booking');
});

Route::get('/table', function () {
    return view('admin/tables/table');
});

Route::get('/group', function () {
    return view('admin/tables/group');
});

Route::get('/dish', function () {
    return view('admin/tables/dish');
});



//user_test_view

Route::get('/', function () {
    return view('user/home');
});
