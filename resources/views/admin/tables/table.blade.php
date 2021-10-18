@extends('admin.template.layout')
@section('title')Table @endsection
@section('content')

    <h2 class="pt-3">Столи</h2>



    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
        <table class="table tableFixHead table-striped">
            <thead>
            <tr>
                <th>Ід</th>
                <th>Кількість місць</th>

                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Tables as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['count']}}</td>
                    <td><a href="{{ route('AdminUpdateTableView', $item->id) }}" class="btn btn_edit"><i class="bi bi-vector-pen "></i></a>
                        <a href="{{ route('AdminDeleteTable', $item->id) }}" class="btn btn_delete"><i class="bi bi-trash "></i></a>
                    </td>

            @endforeach
            </tbody>
        </table>
    </div>
    <center>
        <button onclick="document.location = '{{ route('AdminCreateTableView') }}';" type="button" class="btn my-2 btn_add">
            Створити
        </button>
    </center>

@endsection
