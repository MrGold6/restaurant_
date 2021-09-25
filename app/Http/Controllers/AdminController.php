<?php

namespace App\Http\Controllers;

use App\Service\BookingServiceImp;
use App\Service\DishesGroupImp;
use App\Service\DishesGroupService;
use App\Service\TableServiceImp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function home() {
        return view('admin/tables/booking', ['Booking' => BookingServiceImp::getAll()]);
    }
    public function table() {
        return view('admin/tables/table', ['Tables' => TableServiceImp::getAll()]);
    }
    public function group() {
        return view('admin/tables/group', ['Group' => DishesGroupService::getAll()]);
    }
    public function dish() {
        return view('admin/tables/dish', ['Dishes' => DishesGroupImp::getAll()]);
    }
}
