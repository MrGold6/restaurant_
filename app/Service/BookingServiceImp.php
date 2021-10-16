<?php


namespace App\Service;


use App\Models\Booking;
use App\Models\Client;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
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
        //Вибираю столи які мені підходять по кількості людей
        $tableWithNeedCount = Table::all()->where('count', '>=', $request['count'])->sortBy('count');
        $tableID = [];
        foreach ($tableWithNeedCount as $table)
            $tableID['id-'.$table->id] = $table->id;

        //Вибираю столи, які заброньовані на вибраний день
        $reserveTable = DB::table('bookings')->select('table_id')
            ->where('status', '=', 1)
            ->whereDay('dateTime', date('d', strtotime($request['date'])))
            ->whereMonth('dateTime', date('m', strtotime($request['date'])))
            ->get();
        $reserveTableID = [];
        foreach ($reserveTable as $table)
            $reserveTableID['id'.$table->table_id] = $table->table_id;

        //Видалити з TableID столи, які співпадають з reserveTableID;
        foreach ($reserveTableID as $id)
            unset($tableID['id-'.$id]);

        //Перевіряю, чи є столи. Якщо столи є, то бронюю перший, якщо немає, вивести повідомлення, що столів с кількістю 5 на вибраний день немає.
        if(count($tableID) > 0) {
            $table = Table::all()->find($tableID[array_key_first($tableID)]);

            $booking = new Booking;
            $booking->name = $request['name'];
            $booking->status = 1;
            $booking->table_id = $table->id;
            $booking->phone = $request['phone'];
            $booking->dateTime = $request['date'].' '.$request['time'];
            $booking->count_of_people = $request['count'];
            $booking->save();

            return 'Бронювання успішно створенно';
        }
        else {
            return 'Столів на '.$request['count'].' людей на '.$request['date'].' не знайдено';
        }
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
        $booking->phone = $request['phone'];
        $booking->dateTime = $request['date'].' '.$request['time'];
        $booking->count_of_people = $request['countPeople'];
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
        return DB::table('bookings')->whereDay('dateTime', now()->day)->whereMonth('dateTime', now()->month)->orderBy('dateTime')->get();
    }
    public static function getBookingByDay($day) {
        //dd(DB::table('bookings')->whereDay('dateTime', date('d', strtotime($day)))->whereMonth('dateTime', date('m', strtotime($day)))->orderBy('dateTime')->get());
        //dd(DB::table('bookings')->whereDay('dateTime', date('d', strtotime($day)))->whereMonth('dateTime', date('m', strtotime($day)))->orderBy('dateTime')->get());
        return DB::table('bookings')->whereDay('dateTime', date('d', strtotime($day)))->whereMonth('dateTime', date('m', strtotime($day)))->orderBy('dateTime')->get();
    }
    public static function completeReserveTable($id) {
        $booking = Booking::all()->find($id);
        if($booking) {
            $booking->status = 0;
            $booking->save();
            $table = Table::all()->find($booking->table_id);
            if($table) {
                $table->status = 0;
                $table->save();
            }
        }
    }
}
