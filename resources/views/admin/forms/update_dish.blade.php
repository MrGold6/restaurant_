@extends('admin.template.layout')
@section('title')Dish @endsection
@section('content')
    <h2>Dish</h2>
    <form action="{{ route('AdminUpdateDish') }}" >
        <label for="id">Id:</label><br>
        <input type="number" name="id" value="{{$Dish->id}}"><br><br>

        <label for="name">Назва:</label><br>
        <input type="text" name="name" value="{{$Dish->name}}"><br><br>
        <label for="cost">Вартість:</label><br>
        <input type="number" name="cost" value="{{$Dish->cost}}"><br><br>
        <label for="count">Вага:</label><br>
        <input type="number" name="count" value="{{$Dish->count}}"><br><br>
        <label for="ingredients">Інгрідієнти:</label><br>
        <input type="text" name="ingredients" value="{{$Dish->ingredients}}"><br><br>
        <label for="dishes_group_id">Група:</label><br>
        <input type="number" name="dishes_group_id" value="{{$Dish->dishes_group_id}}"><br><br>

        <input type="submit" value="Змінити">

    </form>
@endsection
