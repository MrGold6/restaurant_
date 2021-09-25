<?php


namespace App\Service;


use App\Models\Dish;
use Illuminate\Http\Request;

class DishesGroupImp implements DishesGroupService
{

    public function getAll()
    {
        return Dish::all();
    }

    public function create(Request $request)
    {
        $dishGroup = new Dish;
        $dishGroup->name = $request['name'];
        $dishGroup->save();
    }

    public function delete($id)
    {
        Dish::all()->find($id)->delete();
    }

    public function getByID($id)
    {
        return Dish::all()->find($id);
    }

    public function update($id, Request $request)
    {
        $dishGroup = (new Dish)::all()->find($id);
        $dishGroup->name = $request['name'];
        $dishGroup->save();
    }
}
