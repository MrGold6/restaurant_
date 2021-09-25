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
    <table>
        <tr>
            <th>Ід</th>
            <th>Назва</th>
            <th>Дії</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><a href="#">Edit</a> <a href="#">Delete</a></td>

        </tr>
    </table>
@endsection
