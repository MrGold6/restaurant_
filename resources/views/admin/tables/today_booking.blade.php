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
    <table>
        <tr>
            <th>Ід</th>
            <th>Дата</th>
            <th>Час</th>
            <th>Ім'я</th>
            <th>Номер телефону</th>
            <th>Кількість людей</th>
            <th>Номер столику</th>
            <th>Дії</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button id="completeBooking" bookingID="1">Done</button></td>
        </tr>
    </table>

    <h2>Not Active</h2>
    <table>
        <tr>
            <th>Ід</th>
            <th>Дата</th>
            <th>Час</th>
            <th>Ім'я</th>
            <th>Номер телефону</th>
            <th>Кількість людей</th>
            <th>Номер столику</th>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
    </table>
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
