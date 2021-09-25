<?php


namespace App\Service;


use App\Models\Dish;
use Illuminate\Http\Request;

class DishesGroupServiceImp implements DishesGroupService
{
    public static function getAll()
    {
        return Dish::all();
    }

    public static function create(Request $request)
    {
        $dishGroup = new Dish;
        $dishGroup->name = $request['name'];
        $dishGroup->save();
    }

    public static function delete($id)
    {
        Dish::all()->find($id)->delete();
    }

    public static function getByID($id)
    {
        return Dish::all()->find($id);
    }

    public static function update($id, Request $request)
    {
        $dishGroup = (new Dish)::all()->find($id);
        $dishGroup->name = $request['name'];
        $dishGroup->save();
    }
}
