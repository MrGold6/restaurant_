@extends('admin.template.layout')
@section('title')Group @endsection
@section('content')

    <style>
        td, th {
            border: 1px solid #000000;
            padding: 8px;
        }
    </style>
    <h2>Group</h2>
    <a href="{{ route('AdminCreateDishGroupView') }}">Create</a>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
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
                    <td><a href="{{ route('AdminUpdateDishGroupView', $item->id) }}">Edit</a>
                        <a href="{{ route('AdminDeleteDishGroup', $item->id) }}" >Delete</a></td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
