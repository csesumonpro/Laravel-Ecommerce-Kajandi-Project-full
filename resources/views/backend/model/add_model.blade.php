@extends('backend.admin_master')
@section('page_title','Product Model')
@section('admin_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Product Model Form</strong>
                <small>
                    <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                    <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                </small>
            </div>
            {!! Form::open(['method'=>'POST','url'=>'save-model','enctype'=>'multipart/form-data']) !!}
                <div class="card-body card-block">

                    <div class="form-group">
                        <label for="company" class=" form-control-label">Add Product Model Name</label>
                        <input type="text" id="company" name="name" placeholder="Enter Product Model Name" class="form-control">
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