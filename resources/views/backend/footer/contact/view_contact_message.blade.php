@extends('backend.admin_master')
@section('page_title','Message')
@section('admin_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Single Message</strong>
                <small>
                    <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                    <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                </small>
            </div>
            {!! Form::open(['method'=>'POST','url'=>'update-product','enctype'=>'multipart/form-data']) !!}
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Name</label>
                    <input readonly type="hidden" name="id" value="{{$message_by_id->id}}">
                    <input readonly type="text" id="company" name="name" value="{{$message_by_id->name}}" class="form-control">
                    @if ($errors->has('name'))
                        <div class="error">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">Email</label>
                    <input readonly type="hidden" name="id" value="{{$message_by_id->id}}">
                    <input readonly type="text" id="company" name="email" value="{{$message_by_id->email}}" class="form-control">
                    @if ($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">Subject</label>
                    <input readonly type="hidden" name="id" value="{{$message_by_id->id}}">
                    <input readonly type="text" id="company" name="subject" value="{{$message_by_id->subject}}" class="form-control">
                    @if ($errors->has('subject'))
                        <div class="error">{{ $errors->first('subject') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="textarea-input readonly" class=" form-control-label">Message</label>
                    <textarea  readonly name="message" id="textarea-input readonly" rows="9" value="Content..." class="form-control editor">{{$message_by_id->message}}</textarea>
                    @if ($errors->has('message'))
                        <div class="error">{{ $errors->first('message') }}</div>
                    @endif
                </div>

            <p class="text-right "><a class="btn btn-info" href="{{url('/replay-contact-message/'.$message_by_id->id)}}"> Replay Message</a></p>
                {{--<button type="submit" class="btn btn-dark btn-lg btn-block">Add</button>--}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection