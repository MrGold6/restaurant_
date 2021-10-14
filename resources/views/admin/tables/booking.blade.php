@extends('admin.template.layout')
@section('title')Booking @endsection
@section('content')



    <h2 class="pt-3">Бронювання</h2>


    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-5 pt-1 px-2 pb-4 mx-auto">
        <form class="d-flex" id="search" action="{{ route('AdminSearchBooking') }}" method="post">
            @csrf
            <input class="form-control me-2 shadow bg-body rounded rounded-pill border-0" id="search_input" type="date" name="date" data-date-format="MMMM DD YYYY" placeholder="дата">
            <button class="btn btn_find mx-2" id="search_button" type="submit">Знайти</button>
            <a href="{{route('AdminHome')}}" class="btn btn_find_all">Всі</a>
        </form>
    </div>



    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">

        <table class="table tableFixHead table-striped">
            <thead>
            <tr>
                <th>Ід</th>
                <th>Дата і час</th>
                <th>Статус</th>
                <th>Ім'я</th>
                <th>Номер телефону</th>
                <th>Кількість людей</th>
                <th>Номер столику</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($Booking))
                @foreach($Booking as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->dateTime}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->count_of_people}}</td>
                        <td>{{$item->table_id}}</td>
                        <td><a href="{{ route('AdminUpdateBookingView', $item->id) }}" class="btn btn_edit"><i class="bi bi-vector-pen "></i></a>
                            <a href="{{ route('AdminDeleteBooking', $item->id) }}" class="btn btn_delete"><i class="bi bi-trash "></i></a>
                        </td>

                @endforeach
            @endif
            </tbody>
        </table>


    </div>
    <center>
        <button onclick="document.location = '{{ route('AdminCreateBookingView') }}';" type="button" class="btn my-2 btn_add">
            Створити
        </button>
    </center>



@endsection
