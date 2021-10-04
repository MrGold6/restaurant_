@extends('admin.template.layout')
@section('title')Group @endsection
@section('content')
    <h2>Увійти</h2>
    <form action="{{ route('AdminAuth') }}" >

        <label for="Admin">Логін:</label><br>
        <input type="text" name="Admin"><br>

        <label for="Password">Пароль:</label><br>
        <input type="password" name="Password"><br><br>


        <input type="submit" value="Увіти">
    </form>
@endsection
