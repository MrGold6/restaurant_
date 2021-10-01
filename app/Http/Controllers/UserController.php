<?php

namespace App\Http\Controllers;

use App\Service\DishesGroupServiceImp;
use App\Service\DishServiceImp;
use App\Service\TableServiceImp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function home() {
        return view('user/home', ['dishes' => DishServiceImp::getAll()]); //sort by DishesGroup
    }
    public function reserveTable(Request $request) {
        TableServiceImp::create($request);
        return Redirect::back(); //or redirect()->route('/');
    }
}
