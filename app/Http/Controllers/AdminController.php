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
        if(substr(url()->current(), -12) != '/Admin/LogIn' && substr(url()->current(), -11) != '/Admin/Auth')
            $this->middleware(CheckAdminAuth::class);
    }

    public function auth(Request $request) {
        if($request['Admin'] == 'root' && $request['Password'] == 'root') {
            Cookie::queue(Cookie::make('Admin', $request['Admin'], 60 * 60 * 24 * 7));
            Cookie::queue(Cookie::make('Password', $request['Password'], 60 * 60 * 24 * 7));
            return redirect()->route('AdminHome');
        }
        else
            return Redirect::back();
    }
    public function login() {
        if(Cookie::get('Admin') == 'root' && Cookie::get('Password'))
            return redirect()->route('AdminHome');
        else
            return view('admin/forms/form_auth');
    }
    public function logout() {
        Cookie::queue(Cookie::forget('Admin'));
        Cookie::queue(Cookie::forget('Password'));
        return view('admin/forms/form_auth'); //Тестити!!!!
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
    public function completeBooking(Request $request) {
        BookingServiceImp::completeReserveTable($request['id']);
        return BookingServiceImp::getAll();
    }

    public function createBookingView() {
        return view('admin/forms/form_booking');
    }
    public function createDishView() {
        return view('admin/forms/form_dish');
    }
    public function createDishGroupView() {
        return view('admin/forms/form_group');
    }
    public function createTableView() {
        return view('admin/forms/form_table');
    }

    public function updateBookingView($id) {
        return view('admin/forms/update_booking', ['Booking' => BookingServiceImp::getByID($id)]);
    }
    public function updateDishView($id) {
        return view('admin/forms/update_dish', ['Dish' => DishServiceImp::getByID($id)]);
    }
    public function updateDishGroupView($id) {
        return view('admin/forms/update_group', ['DishesGroup' => DishesGroupServiceImp::getByID($id)]);
    }
    public function updateTableView($id) {
        return view('admin/forms/update_table', ['Table' => TableServiceImp::getByID($id)]);
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
