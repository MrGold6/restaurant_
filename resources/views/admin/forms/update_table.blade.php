@extends('admin.template.layout')
@section('title')Table @endsection
@section('content')


    <h2>Table</h2>

    <form action="{{ route('AdminUpdateTable') }}" >

        <label for="id">Id:</label><br>
        <input type="number" name="id" value="{{$Table->id}}"><br><br>
        <label for="count">Кількість місць:</label><br>
        <input type="number" name="count" value="{{$Table->count}}"><br><br>
        <label for="status">Статус:</label><br>
        <input type="radio" id="status"
               name="status" value="1"  @if($Table->status==1) checked @endif>
        <label for="status">Активний</label><br>

        <input type="radio" id="status"
               name="status" value="0"  @if($Table->status==0) checked @endif>
        <label for="status">Пасивний</label><br>

        <input type="submit" value="Змінити">


    </form>
@endsection
