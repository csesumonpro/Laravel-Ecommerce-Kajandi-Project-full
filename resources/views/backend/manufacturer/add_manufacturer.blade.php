@extends('backend.admin_master')
@section('page_title','Manufacturer')
@section('admin_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Manufacturer Form</strong>
                <small>
                    <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                    <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                </small>
            </div>
            {!! Form::open(['method'=>'POST','url'=>'save-manufacturer','enctype'=>'multipart/form-data']) !!}
                <div class="card-body card-block">

                    <div class="form-group">
                        <label for="company" class=" form-control-label">Add Manufacturer Name</label>
                        <input type="text" id="company" name="name" placeholder="Enter Manufacturer Name" class="form-control">
                        @if ($errors->has('name'))
                            <div class="error">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-dark btn-lg btn-block">Add</button>
                 </div>
            {!! Form::close() !!}
        </div>
    </div>
    @endsection