@extends('admin.template.layout')
@section('title')Dish @endsection
@section('content')

    <style>
        td, th {
            border: 1px solid #000000;
            padding: 8px;
        }
    </style>

    <h2>Dish</h2>
    <a href="{{url('/create_dish')}}">Create</a>
    <table>
        <tr>
            <th>Ід</th>
            <th>Назва</th>
            <th>Група</th>
            <th>Ціна</th>
            <th>Кількість</th>
            <th>Інгрідієнти</th>
            <th>Дії</th>
        </tr>
        @foreach($Dishes as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td{{$item['dishes_group_id']}}></td>
            <td>{{$item['cost']}}</td>
            <td>{{$item['count']}}</td>
            <td>{{$item['ingredients']}}</td>
            <td><a href="#">Edit</a> <a href="#">Delete</a></td>
        </tr>
        @endforeach

    </table>
@endsection
