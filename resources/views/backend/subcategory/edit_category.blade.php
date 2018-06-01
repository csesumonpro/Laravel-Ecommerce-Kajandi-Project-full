@extends('backend.admin_master')
@section('page_title','Sub Category Edit')
@section('admin_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Sub Category Update Form</strong>
                <small>
                    <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                    <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                </small>
            </div>
            {!! Form::open(['method'=>'POST','url'=>'update-sub-category','enctype'=>'multipart/form-data']) !!}
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Update Sub Category Name</label>
                    <input type="hidden" name="id" value="{{$category_by_id->id}}">
                    <input type="text" id="company" name="sub_cat_name" value="{{$category_by_id->sub_cat_name}}" class="form-control">
                    @if ($errors->has('sub_cat_name'))
                        <div class="error">{{ $errors->first('sub_cat_name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="SelectLm" class=" form-control-label">Update Sub Category Under Category</label>
                    <select name="cat_id" id="SelectLm" class="form-control-sm form-control">
                        <option value="0">Select One</option>
                        @foreach($all_category as $category)
                            <option value="{{$category->id}}"
                                    @if($category->id==$category_by_id->cat_id)
                                        selected
                                    @endif
                            >{{$category->cat_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">Update Category Short Description</label>
                    <input type="text" id="company" name="sub_cat_desc" value="{{$category_by_id->sub_cat_desc}}" class="form-control">
                    @if ($errors->has('sub_cat_desc'))
                        <div class="error">{{ $errors->first('sub_cat_desc') }}</div>
                    @endif
                </div>
                <button type="submit" class="btn btn-dark btn-lg btn-block">Update</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection