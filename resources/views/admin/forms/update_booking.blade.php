@extends('admin.template.layout')
@section('title')Group @endsection
@section('content')
    <h2>Group</h2>
    <form action="{{ route('AdminUpdateBooking') }}" >

        <label for="id">Id:</label><br>
        <input type="number" name="id" value="{{$Booking->id}}"><br><br>

        <label for="name">Ім'я:</label><br>
        <input type="text" name="name" value="{{$Booking->name}}"><br><br>
        <label for="phone">Телефон:</label><br>
        <input type="text" name="phone" value="{{$Booking->phone}}"><br><br>
        <label for="count_of_people">Кількість гостей:</label><br>
        <input type="number" name="count_of_people" value="{{$Booking->count_of_people}}"><br><br>
        <label for="dateTime">Дата:</label><br>
        <input type="date" name="dateTime" value="{{$Booking->dateTime}}"><br><br>
        <label for="number">Номер столика:</label><br>
        <input type="number" name="table_id" value="{{$Booking->table_id}}"><br><br>
        <label for="status">Статус:</label><br>
        <input type="radio" id="status"
               name="status" value="1"  @if($Booking->status==1) checked @endif>
        <label for="status">Активний:</label><br>

        <input type="radio" id="status"
               name="status" value="0"  @if($Booking->status==0) checked @endif>
        <label for="status">Пасивний:</label><br>

        <input type="submit" value="Змінити">
    </form>
@endsection
