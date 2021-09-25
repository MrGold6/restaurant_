@extends('admin.template.layout')
@section('title')Table @endsection
@section('content')

    <style>
        td, th {
            border: 1px solid #000000;
            padding: 8px;
        }
    </style>
    <h2>Table</h2>
    <a href="{{url('/create_table')}}">Create</a>
    <table>
        <tr>
            <th>Ід</th>
            <th>Кількість місць</th>
            <th>Статус</th>
            <th>Дії</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="#">Edit</a> <a href="#">Delete</a></td>
        </tr>
    </table>
@endsection
