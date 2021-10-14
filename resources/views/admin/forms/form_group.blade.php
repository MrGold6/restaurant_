@extends('admin.template.layout')
@section('title')Group @endsection
@section('content')

    <div class="col-xl-7 col-lg-10 col-md-10 col-sm-10 mx-auto p-3 pt-3">
        <div class="card card_form shadow">
            <div class="card-body ">
                <legend class="card-title text-center">Група</legend>
                <form action="{{ route('AdminCreateDishGroup') }}" method="post">
                    @csrf

                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Назва:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="name" maxlength="20" required>
                        </div>
                    </div>

                    <center><input type="submit" class="btn btn_add" value="Створити"></center>
                </form>

            </div>
        </div>
    </div>
@endsection
