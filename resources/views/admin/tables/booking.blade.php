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
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="#">Edit</a> <a href="#">Delete</a></td>
        </tr>
    </table>
@endsection
