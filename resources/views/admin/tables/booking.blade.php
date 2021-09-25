@extends('admin.template.layout')
@section('title')Booking @endsection
@section('content')

    <style>
        td, th {
            border: 1px solid #000000;
            padding: 8px;
        }
    </style>

    <h2>Booking</h2>
    <a href="{{url('/create_booking')}}">Create</a>
    <table>
        <tr>
            <th>Ід</th>
            <th>Дата</th>
            <th>Час</th>
            <th>Ім'я</th>
            <th>Номер телефону</th>
            <th>Кількість людей</th>
            <th>Номер столику</th>
            <th>Дії</th>
        </tr>
        @foreach($Booking as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['phone']}}</td>
            <td>{{$item['dateTime']}}</td>
            <td>{{$item['count_of_people']}}</td>
            <td>{{$item['table_id']}}</td>
            <td>{{$item['name']}}</td>
            <td><a href="#">Edit</a> <a href="#">Delete</a></td>
        </tr>
        @endforeach
    </table>
@endsection
