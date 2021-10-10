<?php


namespace App\Service;


use App\Models\Dish;
use App\Models\DishesGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DishServiceImp implements DishServiсe
{
    public static function getAll()
    {
        return DB::table('dishes')
            ->join('dishes_groups', 'dishes_groups.id', '=', 'dishes.dishes_group_id')
            ->select('dishes.id as id', 'dishes.name as name', 'dishes.cost as cost', 'dishes.count as count', 'dishes.ingredients as ingredients', 'dishes_groups.name as dishesGroupName')
            ->orderByDesc('dishes_group_id')->get();
    }

    public static function create(Request $request)
    {
        $dish = new Dish;
        $dish->name = $request['name'];
        $dish->cost = $request['cost'];
        $dish->count = $request['count'];
        $dish->ingredients = $request['ingredients'];
        $dish->dishes_group_id = $request['dishes_group_id'];
        $dish->save();
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
        $dish = (new Dish)::all()->find($id);
        $dish->name = $request['name'];
        $dish->cost = $request['cost'];
        $dish->count = $request['count'];
        $dish->ingredients = $request['ingredients'];
        $dish->dishes_group_id = $request['dishes_group_id'];
        $dish->save();
    }

    public static function getAllSortByGroup()
    {
        return Dish::all()->sortBy('dishes_group_id');
    }
}
