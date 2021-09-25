<?php


namespace App\Service;


use App\Models\Booking;
use App\Models\Client;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingServiceImp implements BookingService
{
    public static function getAll()
    {
        return Booking::all();
    }

    public static function create(Request $request)
    {
        $booking = new Booking;
        $booking->name = $request['name'];
        $booking->number = $request['phone'];
        $booking->dateTime = $request['dateTime'];
        $booking->countPeople = $request['countPeople'];
        $booking->save();
    }

    public static function delete($id)
    {
        Booking::all()->find($id)->delete();
    }

    public static function getByID($id)
    {
        return Booking::all()->find($id);
    }

    public static function update($id, Request $request)
    {
        $booking = Booking::all()->find($id);
        $booking->name = $request['name'];
        $booking->number = $request['phone'];
        $booking->dateTime = $request['dateTime'];
        $booking->countPeople = $request['countPeople'];
        $booking->save();
    }

    public static function getAllSortByDayANDSortByTime()
    {
        return Booking::all()->sortBy('dateTime');
    }

    public static function getAllByDay($day)
    {
        return Booking::all()->sortBy('dateTime')->where('dateTime', '=', $day);
    }

    public static function sortByDay(Request $request) {
        return DB::table('bookings')->whereDay('dateTime', '=', $request['date'])->orderBy('dateTime');
    }
    public static function currentDay() {
        return DB::table('bookings')->whereDay('dateTime', '=', Carbon::now())->orderBy('dateTime');
    }
}
