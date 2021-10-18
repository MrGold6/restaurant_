@extends('admin.template.layout')
@section('title')Group @endsection
@section('content')
    <div class="col-xl-7 col-lg-10 col-md-10 col-sm-10 mx-auto p-3 pt-3">
        <div class="card card_form shadow">
            <div class="card-body ">
                <legend class="card-title text-center">Бронювання</legend>
                <form action="{{ route('AdminUpdateBooking') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Ід:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" name="id" value="{{$Booking->id}}" readonly>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Ім'я:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="name" value="{{$Booking->name}}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Телефон:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="tel" id="phone" name="phone"
                                   pattern="[0-9]{10}" value="{{$Booking->phone}}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Кількість гостей:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" name="countPeople" min="0" value="{{$Booking->count_of_people}}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Дата:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="date" name="date" data-date-format="MMMM DD YYYY" value="{{mb_substr($Booking->dateTime,0,10)}}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Час:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="time" name="time" value="{{mb_substr($Booking->dateTime,11,20)}}" required>
                        </div>
                    </div>



                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Номер столика:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" name="table_id" value="{{$Booking->table_id}}" required>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Статус:</label>
                        <div class="col-sm-6">
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status1"
                                       name="status" value="1"  class="form-check-input" required @if($Booking->status==1) checked @endif>
                                <label for="status" class="form-check-label" >Активне</label>

                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status2"
                                       name="status" value="0" class="form-check-input" required @if($Booking->status==0) checked @endif>
                                <label for="status2" class="form-check-label">Неактивне</label>
                            </div>
                        </div>
                    </div>



                    <center><input type="submit" class="btn btn_edit_form" value="Змінити"></center>
                </form>
            </div>
        </div>
    </div>
@endsection
