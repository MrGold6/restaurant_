@extends('admin.template.layout')
@section('title')Booking @endsection
@section('content')

    <h2 class="pt-3">Бронювання на сьогодні</h2>

    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Відкриті
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">

                    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                        <table class="table tableFixHead table-striped" id="Active">
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
                                @if($item->status==1)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->dateTime}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->count_of_people}}</td>
                                        <td>{{$item->table_id}}</td>

                                        <td><button id="completeBooking" bookingID="{{ $item->id }}" class="btn btn_add"><i class="bi bi-check-lg text-white"></i></button></td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Закриті
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                        <table class="table tableFixHead table-striped" id="notActive">
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
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Booking as $item)
                                @if($item->status==0)
                                    <tr id="booking-{{ $item->id }}">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->dateTime }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->count_of_people }}</td>
                                        <td>{{ $item->table_id }}</td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script>
        $('body').delegate('#completeBooking', 'click', function () {
            let id = $(this).attr('bookingID')

            $.ajax({
                url: '{{ route('AdminCompleteBooking') }}',
                method: 'post',
                data: {
                    _token : $('meta[name="csrf-token"]').attr('content'),
                    id: id
                },
                success: function(booking) {
                    let notActive = '', Active = ''
                    if(booking) {
                        for (let i = 0; i < booking.length; i++)
                            if(booking[i].status)
                                Active += buildTable(booking[i])
                            else
                                notActive += buildTable(booking[i])

                        $('#notActive tbody > tr').remove();
                        $('#Active tbody > tr').remove();

                        $('#notActive').append(notActive)
                        $('#Active').append(Active)
                        function buildTable(booking) {
                            let item = ''
                            let bookingID = "bookingID='" + booking['id'] + "'"
                            item += '<tr>'

                            item += '<td>'
                            item += booking['id']
                            item += '</td>'

                            item += '<td>'
                            item += booking['dateTime']
                            item += '</td>'

                            item += '<td>'
                            item += booking['status']
                            item += '</td>'

                            item += '<td>'
                            item += booking['name']
                            item += '</td>'

                            item += '<td>'
                            item += booking['phone']
                            item += '</td>'

                            item += '<td>'
                            item += booking['count_of_people']
                            item += '</td>'

                            item += '<td>'
                            item += booking['table_id']
                            item += '</td>'

                            if(booking['status'] == 1) {
                                item += '<td>'
                                item += '<button id="completeBooking" ' + bookingID + ' class="btn btn_add"><i class="bi bi-check-lg text-white"></i></button>'
                                item += '</td>'
                            }

                            item += '</tr>'
                            return item;
                        }
                    }
                }
            })
        })
    </script>
@endsection
