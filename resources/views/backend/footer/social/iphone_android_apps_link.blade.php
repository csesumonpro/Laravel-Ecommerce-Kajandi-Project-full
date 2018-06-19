@extends('backend.admin_master')
@section('page_title','Apps Download Link')
@section('admin_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Apps Download LInk</strong>
                <small>
                    <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                    <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                </small>
            </div>
            <?php
            $apps_link = DB::table('android_iphones')->where('id',1)->first();
            ?>

            {!! Form::open(['method'=>'POST','url'=>'save-apps-download-link','enctype'=>'multipart/form-data']) !!}
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Add Iphone Apps Download URL</label>
                    <input type="text" id="company" name="iphone" class="form-control"
                           @if($apps_link!=NULL)
                           value="{{$apps_link->iphone}}"
                           @else
                           placeholder="Enter Iphone Apps Download URL"
                            @endif
                    >
                    @if ($errors->has('iphone'))
                        <div class="error">{{ $errors->first('iphone') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">Add Android Apps Download URL</label>
                    <input type="text" id="company" name="android" class="form-control"
                           @if($apps_link!=NULL)
                           value="{{$apps_link->android}}"
                           @else
                           placeholder="Enter Iphone Apps Download URL"
                            @endif
                    >
                    @if ($errors->has('android'))
                        <div class="error">{{ $errors->first('android') }}</div>
                    @endif
                </div>

                <button type="submit" class="btn btn-dark btn-lg btn-block">Add/Update</button>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection