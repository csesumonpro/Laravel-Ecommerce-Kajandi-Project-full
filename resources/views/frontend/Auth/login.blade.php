
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@include('frontend.front_view.includes.header_copy')

  <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Salsa' rel='stylesheet' type='text/css'>
  <!-- js -->
  <script type="text/javascript" src="{{asset('public/frontend/login/js/jquery-2.1.4.min.js')}}"></script>
  <!-- js -->
  <link href="{{asset('public/frontend/login/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
  <!-- script for close -->
  <script>
  $(document).ready(function(c) {
  	$('.alert-close').on('click', function(c){
  		$('.vlcone').fadeOut('slow', function(c){
  			$('.vlcone').remove();
  		});
  	});
  });
  </script>

    <div class="content" style="">
		<h1 style="color:black">Ecommerce Kajandi</h1>

        <h2 style="color:black; font-weight:bolder;" class="text-center  alert-success">{{Session::get('message_success')}}</h2>
        <h3 class="text-center  alert-danger">{{Session::get('message_error')}}</h3>

		<div class="main vlcone">
			<div class="alert-close"> </div>
			<div class="hotel-left">
				<div class="pay_form">
					<h2>Login Here</h2>
					<form action="{{route('login')}}" method="post">@csrf
						<input class="logo" type="text" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
						<input class="key" type="password" name="password" value="Password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
						<input type="submit" value="Login">
					</form>
				</div>
				<a href="#">Forgot Password</a>
				<a href="#" class="login-right">Register</a>
				<div class="clear"></div>
			</div>
			<div class="hotel-right">
				<h3>DIGITAL PRODUCTS <span>MARKET PLACE</span></h3>
				<p>A perfect place for buy or sell goods online.</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>

@include('frontend.front_view.includes.footer')
