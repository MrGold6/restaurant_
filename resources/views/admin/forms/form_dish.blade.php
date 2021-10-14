@extends('admin.template.layout')
@section('title')Dish @endsection
@section('content')

    <div class="col-xl-7 col-lg-10 col-md-10 col-sm-10 mx-auto p-3 pt-3">
        <div class="card card_form shadow">
            <div class="card-body ">
                <legend class="card-title text-center">Страва</legend>
                <form action="{{ route('AdminCreateDish') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Назва:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="name" maxlength="20" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Вартість:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" name="cost" min="0" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Вага:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" name="count" min="0" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Інгрідієнти:</label>
                        <div class="col-sm-6">
                            <input class="form-control"  type="text" name="ingredients" required>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Група:</label>
                        <div class="col-sm-6">
                            <select  name="dishes_group_id" class="form-select">
                                @foreach($dishes_group as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <center><input type="submit" class="btn btn_add" value="Створити"></center>
                </form>
            </div>
        </div>
    </div>
@endsection
