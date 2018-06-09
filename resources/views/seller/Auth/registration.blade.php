<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Seller Registration</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('public/backend/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('public/backend/assets/scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post" action="{{route('sellerReg')}}">
                      @csrf

                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Vendor Name</label>
                            <input type="text" name="vendorname" class="form-control{{ $errors->has('vendorname') ? ' is-invalid' : '' }}" placeholder="Vendor Name">
                            @if ($errors->has('vendorname'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('vendorname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="Address">
                            @if ($errors->has('address'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" placeholder="Country">
                            @if ($errors->has('country'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Contact Name</label>
                            <input type="text" name="contactname" class="form-control{{ $errors->has('contactname') ? ' is-invalid' : '' }}" placeholder="Contact Name">
                            @if ($errors->has('contactname'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('contactname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Register with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Register with twitter</button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="#"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('public/backend/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/plugins.js')}}"></script>
    <script src="{{asset('public/backend/assets/js/main.js')}}"></script>


</body>
</html>
