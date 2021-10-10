@extends('admin.template.layout')
@section('title')Group @endsection
@section('content')
    <h2>Group</h2>
    <form action="{{ route('AdminUpdateDishGroup') }}" >
        <label for="id">Id:</label><br>
        <input type="number" name="id" value="{{$DishesGroup->id}}"><br><br>

        <label for="name">Назва:</label><br>
        <input type="text" name="name" value="{{$DishesGroup->name}}"><br><br>

        <input type="submit" value="Змінити">
    </form>
@endsection
