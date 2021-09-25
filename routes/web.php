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
Route::get('/', function () {
    return view('admin/tables/booking');
});

Route::get('/booking', function () {
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


Route::get('/create_table', function () {
    return view('admin/forms/form_table');
});

Route::get('/create_group', function () {
    return view('admin/forms/form_group');
});

Route::get('/create_booking', function () {
    return view('admin/forms/form_booking');
});

Route::get('/create_dish', function () {
    return view('admin/forms/form_dish');
});

Route::get('/today_booking', function () {
    return view('admin/tables/today_booking');
});





