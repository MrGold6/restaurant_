<?php

namespace App\Http\Controllers;

use App\Service\BookingServiceImp;
use App\Service\DishesGroupServiceImp;
use App\Service\DishServiceImp;
use App\Service\TableServiceImp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function home() {
        return view('user/home', ['dishes' => DishServiceImp::getAll(), 'MaxCount' => TableServiceImp::maxCountPeople()]); //sort by DishesGroup
    }
    public function reserveTable(Request $request) {
        TableServiceImp::create($request);
        return Redirect::back(); //or redirect()->route('/');
    }
    public function createBooking(Request $request) {
        $Log = BookingServiceImp::create($request);
        session()->flash('Log', $Log);
        return redirect()->back();
    }
}
