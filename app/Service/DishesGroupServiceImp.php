<?php


namespace App\Service;


use App\Models\Dish;
use App\Models\DishesGroup;
use Illuminate\Http\Request;

class DishesGroupServiceImp implements DishesGroupService
{
    public static function getAll()
    {
        return DishesGroup::all();
    }

    public static function create(Request $request)
    {
        $dishGroup = new DishesGroup;
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
        $dishGroup = (new DishesGroup)::all()->find($id);
        $dishGroup->name = $request['name'];
        $dishGroup->save();
    }
}
