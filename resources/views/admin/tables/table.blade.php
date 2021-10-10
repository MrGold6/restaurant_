@extends('admin.template.layout')
@section('title')Table @endsection
@section('content')

    <style>
        td, th {
            border: 1px solid #000000;
            padding: 8px;
        }
    </style>
    <h2>Table</h2>

    <a href="{{ route('AdminCreateTableView') }}">Create</a>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Ід</th>
                <th>Кількість місць</th>
                <th>Статус</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($Tables as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['count']}}</td>
                    <td>{{$item['status']}}</td>
                    <td><a href="{{ route('AdminUpdateTableView', $item->id) }}">Edit</a>
                        <a href="{{ route('AdminDeleteTable', $item->id) }}" >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
