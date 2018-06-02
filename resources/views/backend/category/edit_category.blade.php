@extends('backend.admin_master')
@section('page_title','Category Edit')
@section('admin_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Category Update Form</strong>
                <small>
                    <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                    <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                </small>
            </div>
            {!! Form::open(['method'=>'POST','url'=>'update-category','enctype'=>'multipart/form-data']) !!}
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Update Category Title</label>
                    <input type="text" id="company" name="cat_title" value="{{$category_by_id->cat_title}}" class="form-control">
                    <input type="hidden" value="{{$category_by_id->id}}" name="id"/>
                    @if ($errors->has('cat_title'))
                        <div class="error">{{ $errors->first('cat_title') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">Update Category Name</label>
                    <input type="text" id="company" name="cat_name" value="{{$category_by_id->cat_name}}" class="form-control">
                    @if ($errors->has('cat_name'))
                        <div class="error">{{ $errors->first('cat_name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">Update Category Image</label>
                    <input type="file" id="company" name="cat_image" class="form-control">
                    <img width="100" height="100" src="{{asset($category_by_id->cat_image)}}" alt="{{$category_by_id->cat_title}}">
                    @if ($errors->has('cat_image'))
                        <div class="error">{{ $errors->first('cat_image') }}</div>
                    @endif
                </div>
                <button type="submit" class="btn btn-dark btn-lg btn-block">Update</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection