@extends('admin.template.layout')
@section('title')Table @endsection
@section('content')

    <div class="col-xl-7 col-lg-10 col-md-10 col-sm-10 mx-auto p-3 pt-3">
        <div class="card card_form shadow">
            <div class="card-body ">
                <legend class="card-title text-center">Столик</legend>

                <form action="{{ route('AdminUpdateTable') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Iд:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" name="id" value="{{$Table->id}}" required>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Кількість місць:</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="number" name="count" min="0" max="4" value="{{$Table->count}}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-6 col-form-label ln">Статус:</label>
                        <div class="col-sm-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="status1"
                                       name="status" value="1"  @if($Table->status==1) checked @endif>
                                <label for="status1" class="form-check-label" >Активний</label>

                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="status2"
                                       name="status" value="0"  @if($Table->status==0) checked @endif>
                                <label for="status2" class="form-check-label">Неактивний</label>
                            </div>
                        </div>


                    </div>


                    <center><input type="submit" class="btn btn_edit_form" value="Змінити"></center>
                </form>

            </div>
        </div>
    </div>
@endsection
