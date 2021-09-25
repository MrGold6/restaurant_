<?php

namespace App\Http\Controllers;

use App\Service\BookingServiceImp;
use App\Service\DishesGroupServiceImp;
use App\Service\DishesGroupService;
use App\Service\DishServiceImp;
use App\Service\TableServiceImp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
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
}
