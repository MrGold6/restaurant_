@extends('admin.template.layout')
@section('title')Бронювання @endsection
@section('content')
    <div class="col-xl-7 col-lg-10 col-md-10 col-sm-10 mx-auto p-3 pt-3">
        <div class="card card_form shadow">
            <div class="card-body ">
                <legend class="card-title text-center">Бронювання</legend>
                @if(\Illuminate\Support\Facades\Session::has('Log'))
                    <div class="alert alert-primary" role="alert">
                        {{ \Illuminate\Support\Facades\Session::get('Log') }}.<br> <a href="{{route('AdminHome')}}" class="alert-link">Повернутися до списку бронювань.</a>
                    </div>


                @endif
                    <form action="{{ route('createBooking') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-6 col-form-label ln">Ім'я:</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="name" maxlength="20" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-6 col-form-label ln">Телефон:</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="tel" id="phone" name="phone"
                                       pattern="[0-9]{10}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-6 col-form-label ln">Кількість гостей:</label>
                            <div class="col-sm-6">
                                <select class="form-select" name="count">
                                    @for($i = 0; $i < $MaxCount ? $MaxCount : 0; $i++)
                                        <option value="{{ $i + 1 }}">{{ $i + 1 }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-6 col-form-label ln">Дата:</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="date" name="date" data-date-format="MMMM DD YYYY" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-6 col-form-label ln">Час:</label>
                            <div class="col-sm-6">
                                <input class="form-control" type="time" name="time" required>
                            </div>
                        </div>

                        <input type="hidden" id="status"
                               name="status" value="1">


                        <center><input type="submit" class="btn btn_add" value="Створити"></center>
                    </form>
            </div>
        </div>
    </div>
@endsection
