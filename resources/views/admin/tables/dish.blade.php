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
    <a href="{{ route('AdminCreateDishView') }}">Create</a>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
            <tr>
                <th>Ід</th>
                <th>Назва</th>
                <th>Група</th>
                <th>Ціна</th>
                <th>Вага</th>
                <th>Інгрідієнти</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>

            @foreach($Dishes as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->dishesGroupName}}</td>
                    <td>{{$item->cost}}</td>
                    <td>{{$item->count}}</td>
                    <td>{{$item->ingredients}}</td>

                    <td><a href="{{ route('AdminUpdateDishView', $item->id) }}">Edit</a>
                        <a href="{{ route('AdminDeleteDish', $item->id) }}" >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
