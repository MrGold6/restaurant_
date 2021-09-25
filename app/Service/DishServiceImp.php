<?php


namespace App\Service;


use App\Models\Dish;
use Illuminate\Http\Request;

class DishServiceImp implements DishServiсe
{

    public function getAll()
    {
        return Dish::all();
    }

    public function create(Request $request)
    {
        $dish = new Dish;
        $dish->name = $request['name'];
        $dish->cost = $request['cost'];
        $dish->count = $request['count'];
        $dish->ingredients = $request['ingredients'];
        $dish->dishes_group_id = $request['dishes_group_id'];
        $dish->save();
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
        $dish = (new Dish)::all()->find($id);
        $dish->name = $request['name'];
        $dish->cost = $request['cost'];
        $dish->count = $request['count'];
        $dish->ingredients = $request['ingredients'];
        $dish->dishes_group_id = $request['dishes_group_id'];
        $dish->save();
    }

    public function getAllSortByGroup()
    {
        return Dish::all()->sortBy('dishes_group_id');
    }
}
