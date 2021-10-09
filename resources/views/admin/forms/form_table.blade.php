@extends('admin.template.layout')
@section('title')Table @endsection
@section('content')


    <h2>Table</h2>

    <form action="{{ route('AdminCreateTable') }}" >

        <label for="count">Кількість місць:</label><br>
        <input type="number" name="count"><br><br>
        <input type="radio" id="status"
               name="status" value="1">
        <label for="status">Статус:</label><br>
        <input type="submit" value="Створити">

    </form>
@endsection
