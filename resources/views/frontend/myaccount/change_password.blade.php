@extends('frontend.front_view.front_master')
@section('page-title','Change Password')
@section('main_content')

        {{Form::open(['url'=>'customer-password-change','method'=>'POST','class'=>'form-horizontal'])}}
        <fieldset>

            <!-- Form Name -->
            <legend class="text-center text-primary">Change Your Password Here</legend>
            <hr>
            <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
            <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="piCurrPass">Old Password</label>
                <div class="col-md-4">
                    <input  name="old_password" type="password" placeholder="" class="form-control input-md" required="">
                    @if ($errors->has('old_password'))
                        <div class="text-danger">{{ $errors->first('old_password') }}</div>
                    @endif
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="piNewPass">New Password</label>
                <div class="col-md-4">
                    <input  name="new_password" type="password" placeholder="" class="form-control input-md" required="">
                    @if ($errors->has('new_password'))
                        <div class="text-danger">{{ $errors->first('new_password') }}</div>
                    @endif
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="piNewPassRepeat">Confirm New Password</label>
                <div class="col-md-4">
                    <input  name="confirm_new_password" type="password" placeholder="" class="form-control input-md" required="">
                    @if ($errors->has('confirm_new_password'))
                        <div class="text-danger">{{ $errors->first('confirm_new_password') }}</div>
                    @endif
                </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="bCancel"></label>
                <div class="col-md-8">
                    <button type="reset" id="bCancel" name="bCancel" class="btn btn-danger">Reset</button>
                    <button type="submit"  class="btn btn-success">Change</button>
                </div>

            </div>

            <a href="{{route('my-account',Auth::user()->id)}}"><legend class=" btn btn-primary text-center text-primary">Go Back to your Account</legend></a>
        </fieldset>
   {{Form::close()}}
    <div class="gap gap-small"></div>

    @endsection