@extends('admin.template.layout')
@section('title')Dish @endsection
@section('content')
    <h2>Dish</h2>
    <form action="#">

        <label for="id">Ід:</label><br>
        <input type="number" name="id"><br>

        <label for="name">Назва:</label><br>
        <input type="text" name="name"><br><br>
        <label for="cost">Вартість:</label><br>
        <input type="number" name="cost"><br><br>
        <label for="ingredients">Інгрідієнти:</label><br>
        <input type="text" name="ingredients"><br><br>
        <label for="dishes_group_id">Група:</label><br>
        <input type="number" name="dishes_group_id"><br><br>

        <input type="submit" value="Створити">
    </form>
@endsection
