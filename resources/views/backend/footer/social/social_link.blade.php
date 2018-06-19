@extends('backend.admin_master')
@section('page_title','Social Link')
@section('admin_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Social Link Update Form</strong>
                <small>
                    <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                    <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                </small>
            </div>
            <?php
                $social_link = DB::table('socials')->where('id',1)->first();
            ?>

            {!! Form::open(['method'=>'POST','url'=>'save-social','enctype'=>'multipart/form-data']) !!}
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Add Facebook URL</label>
                    <input type="text" id="company" name="facebook" class="form-control"
                           @if($social_link!=NULL)
                           value="{{$social_link->facebook}}"
                           @else
                               placeholder="Enter Facebook URL"
                               @endif
                    >
                    @if ($errors->has('facebook'))
                        <div class="error">{{ $errors->first('facebook') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">Add Twitter URL</label>
                    <input type="text" id="company" name="twitter" class="form-control"
                           @if($social_link!=NULL)
                           value="{{$social_link->twitter}}"
                           @else
                           placeholder="Enter Twitter URL"
                            @endif
                    >
                    @if ($errors->has('twitter'))
                        <div class="error">{{ $errors->first('twitter') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">Add Pinterest URL</label>
                    <input type="text" id="company" name="pinterest" class="form-control"
                           @if($social_link!=NULL)
                           value="{{$social_link->pinterest}}"
                           @else
                           placeholder="Enter Pinterest URL"
                            @endif
                    >
                    @if ($errors->has('pinterest'))
                        <div class="error">{{ $errors->first('pinterest') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">Add Instagram URL</label>
                    <input type="text" id="company" name="instagram" class="form-control"
                           @if($social_link!=NULL)
                           value="{{$social_link->instagram}}"
                           @else
                           placeholder="Enter Instagram URL"
                            @endif
                    >
                    @if ($errors->has('instagram'))
                        <div class="error">{{ $errors->first('instagram') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">Add Instagram URL</label>
                    <input type="text" id="company" name="google_plus" class="form-control"
                           @if($social_link!=NULL)
                           value="{{$social_link->google_plus}}"
                           @else
                           placeholder="Enter Google-Plus URL"
                            @endif
                    >
                    @if ($errors->has('google_plus'))
                        <div class="error">{{ $errors->first('google_plus') }}</div>
                    @endif
                </div>

                <button type="submit" class="btn btn-dark btn-lg btn-block">Add/Update</button>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection