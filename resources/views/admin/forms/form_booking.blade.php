@extends('admin.template.layout')
@section('title')Group @endsection
@section('content')
    <h2>Group</h2>
    <form action="#">

        <label for="id">Ід:</label><br>
        <input type="number" name="id"><br>

        <label for="name">Ім'я:</label><br>
        <input type="text" name="name"><br><br>
        <label for="count_of_people">Кількість гостей:</label><br>
        <input type="number" name="count_of_people"><br><br>
        <label for="dateTime">Дата:</label><br>
        <input type="date" name="dateTime"><br><br>
        <label for="number">Номер столика:</label><br>
        <input type="number" name="number"><br><br>

        <input type="submit" value="Створити">
    </form>
@endsection