@extends('admin.template.layout')
@section('title')Group @endsection
@section('content')
    <h2>Group</h2>
    <form action="{{ route('AdminCreateDishGroup') }}" >


        <label for="name">Назва:</label><br>
        <input type="text" name="name"><br><br>

        <input type="submit" value="Створити">
    </form>
@endsection
