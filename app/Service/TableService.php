<?php

namespace App\Service;

use Illuminate\Http\Request;

interface TableService
{
    public static  function getAll();
    public static  function create(Request $request);
    public static  function delete($id);
    public static  function getByID($id);
    public static  function update($id, Request $request);
}
