@extends('admin.template.layout')
@section('title')Group @endsection
@section('content')

    <h2 class="pt-3">Групи</h2>

    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">

        <table class="table tableFixHead table-striped">
            <thead>
            <tr>
                <th>Ід</th>
                <th>Назва</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Group as $item)
                <tr>

                    <td>{{$item['id']}}</td>
                    <td>{{$item['name']}}</td>
                    <td><a href="{{ route('AdminUpdateDishGroupView', $item->id) }}" class="btn btn_edit"><i class="bi bi-vector-pen "></i></a>
                        <a href="{{ route('AdminDeleteDishGroup', $item->id) }}" class="btn btn_delete"><i class="bi bi-trash "></i></a>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <center>
        <button onclick="document.location = '{{ route('AdminCreateDishGroupView') }}';" type="button" class="btn my-2 btn_add">
            Створити
        </button>
    </center>
@endsection
