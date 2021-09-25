<?php


namespace App\Service;


use App\Models\Booking;
use App\Models\Client;
use Illuminate\Http\Request;

class BookingServiceImp implements BookingService
{

    public function getAll()
    {
        return Booking::all();
    }

    public function create(Request $request)
    {
        $booking = new Booking;
        $booking->name = $request['name'];
        $booking->number = $request['phone'];
        $booking->dateTime = $request['dateTime'];
        $booking->countPeople = $request['countPeople'];
        $booking->save();
    }

    public function delete($id)
    {
        Booking::all()->find($id)->delete();
    }

    public function getByID($id)
    {
        return Booking::all()->find($id);
    }

    public function update($id, Request $request)
    {
        $booking = Booking::all()->find($id);
        $booking->name = $request['name'];
        $booking->number = $request['phone'];
        $booking->dateTime = $request['dateTime'];
        $booking->countPeople = $request['countPeople'];
        $booking->save();
    }

    public function getAllSortByDayANDSortByTime()
    {
        return Booking::all()->sortBy('dateTime');
    }

    public function getAllByDay($day)
    {
        return Booking::all()->sortBy('dateTime')->where('dateTime', '=', $day);
    }
}
