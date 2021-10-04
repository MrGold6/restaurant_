@extends('admin.template.layout')
@section('title')Booking @endsection
@section('content')

    <style>
        td, th {
            border: 1px solid #000000;
            padding: 8px;
        }
    </style>
    <h2>Today Booking</h2>
    <h2>Active</h2>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>

                <th>Ід</th>
                <th>Дата</th>
                <th>Статус</th>
                <th>Ім'я</th>
                <th>Номер телефону</th>
                <th>Кількість людей</th>
                <th>Номер столику</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Booking as $item)
                @if($item['status']==1)
                    <tr>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['dateTime']}}</td>
                        <td>{{$item['status']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['phone']}}</td>
                        <td>{{$item['count_of_people']}}</td>
                        <td>{{$item['table_id']}}</td>
                        <td><button id="completeBooking" bookingID="1">Done</button></td>
                    </tr>
                @endif
            @endforeach

            </tbody>
        </table>
    </div>


    <h2>Not Active</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
            <tr>
                <th>Ід</th>
                <th>Дата</th>
                <th>Статус</th>
                <th>Ім'я</th>
                <th>Номер телефону</th>
                <th>Кількість людей</th>
                <th>Номер столику</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Booking as $item)
                @if($item['status']==0)
                    <tr>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['dateTime']}}</td>
                        <td>{{$item['status']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['phone']}}</td>
                        <td>{{$item['count_of_people']}}</td>
                        <td>{{$item['table_id']}}</td>

                    </tr>
                @endif
            @endforeach

            </tbody>
        </table>
    </div>




    <script>
        $('body').delegate('#completeBooking', 'click', function () {
            $.ajax({
                ulr: '',
                method: 'post',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: $(this).attr('bookingID')
                },
                success: function () {
                    location.reload()
                }
            })
        })
    </script>
@endsection
