@extends('admin.template.layout')
@section('title')Group @endsection
@section('content')
    <h2>Group</h2>
    <form action="#">
        <label for="id">Ід:</label><br>
        <input type="number" name="id"><br>

        <label for="name">Назва:</label><br>
        <input type="text" name="name"><br><br>

        <input type="submit" value="Створити">
    </form>
@endsection