<?php

namespace App\Service;

use App\Models\Table;
use Illuminate\Http\Request;

interface BookingService
{
    public static function getAll();
    public static function create(Request $request);
    public static function delete($id);
    public static function getByID($id);
    public static function update($id, Request $request);
    public static function getAllSortByDayANDSortByTime();
    public static function getAllByDay($day);
}
