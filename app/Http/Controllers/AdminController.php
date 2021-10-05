<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckAdminAuth;
use App\Models\Booking;
use App\Models\Dish;
use App\Models\DishesGroup;
use App\Models\Table;
use App\Service\BookingServiceImp;
use App\Service\DishesGroupServiceImp;
use App\Service\DishesGroupService;
use App\Service\DishServiceImp;
use App\Service\TableServiceImp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAdminAuth::class);
    }

    public function auth(Request $request) {
        if($request['Admin'] == 'root' && $request['Password'] == 'root') {
            Cookie::make('Admin', $request['Admin']);
            Cookie::make('Password', $request['Password']);
            return redirect('AdminHome');
        }
        else
            return Redirect::back();
    }
    public function logout() {
        Cookie::forget('Admin');
        Cookie::forget('Password');
        return Redirect::back(); //Тестити!!!!
    }

    public function home() {
        return view('admin/tables/booking', ['Booking' => BookingServiceImp::getAll()]);
    }
    public function table() {
        return view('admin/tables/table', ['Tables' => TableServiceImp::getAll()]);
    }
    public function group() {
        return view('admin/tables/group', ['Group' => DishesGroupServiceImp::getAll()]);
    }
    public function dish() {
        return view('admin/tables/dish', ['Dishes' => DishServiceImp::getAll()]);
    }
    public function reserveTable(Request $request) {
        TableServiceImp::create($request);
        return Redirect::back();
    }
    public function sortReserveTable(Request $request) {
        return view('', ['ReserveTable' => BookingServiceImp::sortByDay($request)]);
    }
    public function sortReserveTableCurrentDay() {
        return view('', ['ReserveTable' => BookingServiceImp::currentDay()]);
    }
    public function completeReserveTable($id) {
        BookingServiceImp::completeReserveTable($id);
    }
    public function todayBooking() {
        return view('admin/tables/today_booking', ['Booking' => BookingServiceImp::currentDay()]);
    }

    public function createBooking(Request $request) {
        BookingServiceImp::create($request);
        return redirect()->route('AdminHome');
    }
    public function createDish(Request $request) {
        DishServiceImp::create($request);
        return redirect()->route('AdminDish');
    }
    public function createDishGroup(Request $request) {
        DishesGroupServiceImp::create($request);
        return redirect()->route('AdminGroup');
    }
    public function createTable(Request $request) {
        TableServiceImp::create($request);
        return redirect()->route('AdminTable');
    }

    public function deleteBooking($id) {
        BookingServiceImp::delete($id);
        return Redirect::back();
    }
    public function deleteDish($id) {
        DishServiceImp::delete($id);
        return Redirect::back();
    }
    public function deleteDishGroup($id) {
        DishesGroupServiceImp::delete($id);
        return Redirect::back();
    }
    public function deleteTable($id) {
        TableServiceImp::delete($id);
        return Redirect::back();
    }

    public function updateBooking(Request $request) {
        BookingServiceImp::update($request['id'], $request);
        return redirect()->route('AdminHome');
    }
    public function updateDish(Request $request) {
        DishServiceImp::update($request['id'], $request);
        return redirect()->route('AdminDish');
    }
    public function updateDishGroup(Request $request) {
        DishesGroupServiceImp::update($request['id'], $request);
        return redirect()->route('AdminGroup');
    }
    public function updateTable(Request $request) {
        TableServiceImp::update($request['id'], $request);
        return redirect()->route('AdminTable');
    }
}
