<?php

namespace App\Service;

use Illuminate\Http\Request;

interface DishServiсe
{
    public function getAll();
    public function create(Request $request);
    public function delete($id);
    public function getByID($id);
    public function update($id, Request $request);
    public function getAllSortByGroup();
}
