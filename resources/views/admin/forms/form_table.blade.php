@extends('admin.template.layout')
@section('title')Table @endsection
@section('content')


    <h2>Table</h2>
    <form action="#">
        <label for="id">Ід:</label><br>
        <input type="number" name="id"><br>

        <label for="count">Кількість місць:</label><br>
        <input type="number" name="count"><br><br>
        <label for="status">Статус:</label><br>
        <input type="number" name="status" ><br><br>
        <input type="submit" value="Створити">
    </form>
@endsection
