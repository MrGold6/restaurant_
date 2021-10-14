@extends('admin.template.layout')
@section('title')Group @endsection
@section('content')

    <div class="col-xl-7 col-lg-10 col-md-10 col-sm-10 mx-auto p-3 pt-3">
        <div class="card card_form shadow">
            <div class="card-body ">
                <legend class="card-title text-center pb-2" style="font-family:'Exo2-Bold', cursive, sans-serif;"> Вхід</legend>



                <form action="{{ route('AdminAuth') }}" method="post">
                    @csrf

                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Логін:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="Admin" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Пароль:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="password" name="Password" required>
                        </div>
                    </div>

                    <center><input type="submit" class="btn btn_add" value="Увійти"></center>
                </form>

            </div>
        </div>
    </div>




@endsection
