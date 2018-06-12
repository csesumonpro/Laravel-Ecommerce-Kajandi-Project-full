@extends('frontend.front_view.front_master')
@section('page-title','Login Register')
@section('main_content')

    <div class="container">
        <header class="page-header">
            <h1 class="page-title text-center" >Login & Registration</h1>
        </header>
        <div class="row">
             <div class="col-md-12">
        <div class="box-lg">
            <div class="row" data-gutter="60">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <h3 class="widget-title">Member Login</h3>
                        <p>Welcome back, friend. Login to get started</p>
                        <hr />
                        <p class="alert alert-danger loginformerror" style="display: none;">Email or Password incorrect</p>
                        <div class="form-group">
                            <label>Email or Username</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                            @endif

                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}</label>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Sign In" />
                    </form>
                    <br /><a href="#">Forgot Your Password?</a>
                </div>
                <div class="col-md-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h3 class="widget-title">Create Account</h3>
                        <p>Ready to get best offers? Let's get started!</p>
                        <hr />
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" type="text" />

                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" />


                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input class="form-control" name="phone" type="text" />

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" />

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Repeat Password</label>
                            <input id="password-confirm" class="form-control" type="password" name="password_confirmation" required/>

                        </div>
                        <div class="form-group">
                            <label>Select User Type</label>
                            @if ($errors->has('user_type'))
                                <span class="invalid-feedback">
                           <strong>{{ $errors->first('user_type') }}</strong>
                                 </span>
                            @endif
                            <select  class="form-control" name="user_type">
                                <option value="supplier">Supplier</option>
                                <option value="buyer">Buyer</option>
                                <option value="both">Both</option>
                            </select>
                        </div>
                        <p class="alert alert-danger passwordcorrespond" style="display: none;">
                            Password fields must correspond
                        </p>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />Subscribe to the Newsletter</label>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Create Account" />

                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
       <div class="gap gap-medium"></div>
    </div>



    @endsection