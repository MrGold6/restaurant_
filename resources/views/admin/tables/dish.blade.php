@extends('admin.template.layout')
@section('title')Dish @endsection
@section('content')


    <h2 class="pt-3">Страви</h2>

    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">

        <table class="table tableFixHead table-striped">
            <thead>

            <tr>
                <th>Ід</th>
                <th>Назва</th>
                <th>Група</th>
                <th>Ціна</th>
                <th>Вага</th>
                <th>Інгрідієнти</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach(array_keys($dishes) as $group)
                <tr class="food-type">
                    <td colspan="7" style="font-family:'Exo2-Bold', cursive, sans-serif; font-size: 17px;background: #2125292b;">{{ $group }}</td>
                </tr>
            @foreach($dishes[$group] as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->dishesGroupName}}</td>
                    <td>{{$item->cost}}</td>
                    <td>{{$item->count}}</td>
                    <td>{{$item->ingredients}}</td>

                    <td><a href="{{ route('AdminUpdateDishView', $item->id) }}" class="btn btn_edit"><i class="bi bi-vector-pen "></i></a>
                        <a href="{{ route('AdminDeleteDish', $item->id) }}" class="btn btn_delete"><i class="bi bi-trash "></i></a>
                    </td>


            @endforeach
            @endforeach
            </tbody>
        </table>
    </div>

    <center>
        <button onclick="document.location = '{{ route('AdminCreateDishView') }}';" type="button" class="btn my-2 btn_add">
            Створити
        </button>
    </center>


@endsection
