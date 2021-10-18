@extends('admin.template.layout')
@section('title')Table @endsection
@section('content')

    <div class="col-xl-7 col-lg-10 col-md-10 col-sm-10 mx-auto p-3 pt-3">
        <div class="card card_form shadow">
            <div class="card-body ">
                <legend class="card-title text-center">Столик</legend>

                <form action="{{ route('AdminCreateTable') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Кількість місць:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" name="count" min="0" max="10" required>
                        </div>
                    </div>

                    <input type="hidden" id="status"
                           name="status" value="0">
                    <center><input type="submit" class="btn btn_add" value="Створити"></center>
                </form>

            </div>
        </div>
    </div>
@endsection
