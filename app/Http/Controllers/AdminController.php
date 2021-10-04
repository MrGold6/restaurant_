<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckAdminAuth;
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
    public function booking() {
        return view('admin/tables/booking');
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
    public function auth(Request $request) {
        if($request['Admin'] == 'root' && $request['Password'] == 'root') {
            Cookie::make('Admin', $request['Admin']);
            Cookie::make('Password', $request['Password']);
            return redirect('AdminHome');
        }
        else
            return Redirect::back();
    }
    public function todayBooking() {
        return view('admin/tables/today_booking', ['Booking' => BookingServiceImp::currentDay()]);
    }
}
