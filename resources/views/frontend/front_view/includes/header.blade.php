<!DOCTYPE HTML>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>@yield('page-title')</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="TheBox - premium e-commerce template">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/selectize.bootstrap3.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/star-rating.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/table-responsive01.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/table-responsive02.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/buyer/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/mystyles.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">




</head>

<body>
<div class="global-wrapper clearfix" id="global-wrapper">
    <div class="navbar-before mobile-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="navbar-before-sign">Everything You Need is theBox</p>
                </div>
                <div class="col-md-6">
                    <ul class="nav navbar-nav navbar-right navbar-right-no-mar">
                        <li><a href="#">About Us</a>
                        </li>
                        <li><a href="#">Blog</a>
                        </li>
                        <li><a href="#">Contact Us</a>
                        </li>
                        <li><a href="#">FAQ</a>
                        </li>
                        <li><a href="#">Wishlist</a>
                        </li>
                        <li><a href="#">Help</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
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

        <div class="gap gap-small"></div>
        <ul class="list-inline">
            <li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
            </li>
            <li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
            </li>
        </ul>
    </div>

    <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">


        <form method="POST" action="{{ route('storeUser') }}">
            @csrf

            <h3 class="widget-title">Create TheBox Account</h3>
            <p>Ready to get best offers? Let's get started!</p>
            <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
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
                <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" type="text" />
                @if ($errors->has('phone'))
                    <span class="invalid-feedback">
                  <strong>{{ $errors->first('phone') }}</strong>
              </span>
                @endif

            </div>
            <div class="form-group">
                <label>User Type</label>

                <select class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="user_type">
                    <option value="1">Buyer</option>
                    <option value="2">Supplier</option>
                    <option value="3">Both</option>
                </select>
                @if ($errors->has('phone'))
                    <span class="invalid-feedback">
                  <strong>{{ $errors->first('phone') }}</strong>
              </span>
                @endif

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
            <p class="alert alert-danger passwordcorrespond" style="display: none;">
                Password fields must correspond
            </p>
            <div class="checkbox">
                <label>
                    <input class="i-check" type="checkbox" />Subscribe to the Newsletter</label>
            </div>
            <input class="btn btn-primary" type="submit" value="Create Account" />

        </form>



        <div class="gap gap-small"></div>
        <ul class="list-inline">
            <li><a href="#nav-login-dialog" class="popup-text">Already Memeber</a>
            </li>
        </ul>
    </div>
    <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
        <h3 class="widget-title">Password Recovery</h3>
        <p>Enter Your Email and We Will Send the Instructions</p>
        <hr />
        <form>
            <div class="form-group">
                <label>Your Email</label>
                <input class="form-control" type="text" />
            </div>
            <input class="btn btn-primary" type="submit" value="Recover Password" />
        </form>
    </div>
    <nav class="navbar navbar-inverse navbar-main yamm">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('public/frontend/img/')}}/logo.png">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Shop by Category<i class="drop-caret" data-toggle="dropdown"></i></a>
                        <ul class="dropdown-menu dropdown-menu-category">
                           @foreach($all_category as $category)
                            <li><a href="{{url('/product-category/'.$category->id)}}"><i class="fa fa-cubes dropdown-menu-category-icon"></i>{{$category->cat_name}}</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">{{$category->cat_name}}</h5>
                                                    <ul class="dropdown-menu-category-list">

                                                       @foreach($all_sub_category as $sub_category)
                                                           @if($sub_category->cat_id==$category->id)
                                                        <li><a href="{{url('/product-sub-category/'.$sub_category->id)}}">{{$sub_category->sub_cat_name}}</a>
                                                            <p>{{$sub_category->sub_cat_desc}}</p>
                                                        </li>
                                                            @endif
                                                       @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img width="200" height="80" class="dropdown-menu-category-section-theme-img" src="{{asset($category->cat_image)}}" alt="{{$category->cat_title}}" title="{{$category->cat_title}}" style="height: 100%;" />
                                    </div>
                                </div>
                            </li>
                           @endforeach

                        </ul>
                    </li>
                    <li class="dropdown yamm-fw"><a href="#">Pages<i class="drop-caret" data-toggle="dropdown"></i></a>
                        <ul class="dropdown-menu">
                            <li class="yamm-content">
                                <div class="row row-eq-height row-col-border">
                                    <div class="col-md-2">
                                        <h5>Homepages</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="index.html">Layout 1</a>
                                                <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                            </li>
                                            <li><a href="index-layout-2.html">Layout 2</a>
                                                <p class="dropdown-menu-items-list-desc">Banners Area + Product Carousel</p>
                                            </li>
                                            <li><a href="index-layout-3.html">Layout 3</a>
                                                <p class="dropdown-menu-items-list-desc">Aside Departmens</p>
                                            </li>
                                            <li><a href="index-layout-4.html">Layout 4</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                            </li>
                                            <li><a href="index-layout-5.html">Layout 5</a>
                                                <p class="dropdown-menu-items-list-desc">Small Aside Departmens + Sidebar</p>
                                            </li>
                                            <li><a href="index-layout-6.html">Layout 6</a>
                                                <p class="dropdown-menu-items-list-desc">Full Banners + Product Tabs</p>
                                            </li>
                                            <li><a href="index-layout-7.html">Layout 7</a>
                                                <p class="dropdown-menu-items-list-desc">Small Aside Departmens + Slider</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Category Pages</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="category.html">Layout 1</a>
                                                <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                            </li>
                                            <li><a href="category-layout-2.html">Layout 2</a>
                                                <p class="dropdown-menu-items-list-desc">Banner Title</p>
                                            </li>
                                            <li><a href="category-layout-3.html">Layout 3</a>
                                                <p class="dropdown-menu-items-list-desc">4 Columns Thumbs</p>
                                            </li>
                                            <li><a href="category-layout-4.html">Layout 4</a>
                                                <p class="dropdown-menu-items-list-desc">6 Columns Small Thumbs</p>
                                            </li>
                                            <li><a href="category-layout-5.html">Layout 5</a>
                                                <p class="dropdown-menu-items-list-desc">3 Columns Horizontal Thumbs</p>
                                            </li>
                                            <li><a href="category-layout-6.html">Layout 6</a>
                                                <p class="dropdown-menu-items-list-desc">4 Columns Horizontal Thumbs</p>
                                            </li>
                                            <li><a href="category-layout-7.html">Layout 7</a>
                                                <p class="dropdown-menu-items-list-desc">No Filters</p>
                                            </li>
                                            <li><a href="category-layout-8.html">Layout 8</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                            </li>
                                            <li><a href="category-layout-9.html">Layout 9</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Inverse</p>
                                            </li>
                                            <li><a href="category-layout-10.html">Layout 10</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Color</p>
                                            </li>
                                            <li><a href="category-layout-11.html">Layout 11</a>
                                                <p class="dropdown-menu-items-list-desc">Horizontal Thumbs</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Product Pages</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="product-page.html">Layout 1</a>
                                                <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                            </li>
                                            <li><a href="product-layout-2.html">Layout 2</a>
                                                <p class="dropdown-menu-items-list-desc">No Sidebar</p>
                                            </li>
                                            <li><a href="product-layout-3.html">Layout 3</a>
                                                <p class="dropdown-menu-items-list-desc">Full Area Layout + Banners</p>
                                            </li>
                                            <li><a href="product-layout-4.html">Layout 4</a>
                                                <p class="dropdown-menu-items-list-desc">Gallery Style</p>
                                            </li>
                                            <li><a href="product-layout-5.html">Layout 5</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                            </li>
                                            <li><a href="product-layout-6.html">Layout 6</a>
                                                <p class="dropdown-menu-items-list-desc">Sidebar Left</p>
                                            </li>
                                            <li><a href="product-layout-7.html">Layout 7</a>
                                                <p class="dropdown-menu-items-list-desc">Product Gallery Left</p>
                                            </li>
                                            <li><a href="product-layout-8.html">Layout 8</a>
                                                <p class="dropdown-menu-items-list-desc">Product Gallery Right</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Header Layouts</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="index.html">Layout 1</a>
                                                <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                            </li>
                                            <li><a href="index-nav-layout-2.html">Layout 2</a>
                                                <p class="dropdown-menu-items-list-desc">Center Logo + Category Nav</p>
                                            </li>
                                            <li><a href="index-nav-layout-3.html">Layout 3</a>
                                                <p class="dropdown-menu-items-list-desc">Special Area + Extended Search</p>
                                            </li>
                                            <li><a href="index-nav-layout-4.html">Layout 4</a>
                                                <p class="dropdown-menu-items-list-desc">White Area + Extended Search</p>
                                            </li>
                                        </ul>
                                        <hr />
                                        <h5>Footer Layouts</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="index.html">Layout 1</a>
                                                <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                            </li>
                                            <li><a href="index-footer-layout-2.html">Layout 2</a>
                                                <p class="dropdown-menu-items-list-desc">Minimal</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>Misc</h5>
                                        <ul class="dropdown-menu-items-list">
                                            <li><a href="{{route('cart')}}">Shopping Cart</a>
                                            </li>
                                            <li><a href="shopping-cart-empty.html">Cart Empty</a>
                                            </li>
                                            <li><a href="checkout.html">Checkout</a>
                                            </li>
                                            <li><a href="order-summary.html">Summary</a>
                                            </li>
                                            <li><a href="about-us.html">About Us</a>
                                            </li>
                                            <li><a href="contact.html">Contact</a>
                                            </li>
                                            <li><a href="404.html">404</a>
                                            </li>
                                            <li><a href="blog.html">Blog</a>
                                            </li>
                                            <li><a href="blog-post.html">Blog Post</a>
                                            </li>
                                            <li><a href="login-register.html">Login/Register</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{Form::open(['url'=>'search','method'=>'GET','class'=>'navbar-form navbar-left navbar-main-search'])}}
                    <div class="form-group">
                         <input class="form-control" name="search"  type="text" placeholder="Search the Entire Store..." >
                    </div>
                        <button type="submit" id="searchbtn" class="fa fa-search navbar-main-search-submit"> </button>
                {!! Form::close() !!}


                <div class="showresult">

                </div>
                <ul class="nav navbar-nav navbar-right" >
                    @if(Auth::check())
                        <li><a href="{{route('my-account',Auth::user()->id)}}" class="text-uppercase">{{Auth::user()->name}}</a>
                        </li>
                        @else
                    <li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text">Sign In</a>
                    </li>
                    <li><a href="#nav-account-dialog" data-effect="mfp-move-from-top" class="popup-text">Create Account</a>
                    </li>
                    @endif

                    <li class="dropdown">
                        <a class="fa fa-shopping-cart"  href="{{route('cart')}}">
                            @if(Cart::count('default')!=NULL)
                                ({{Cart::count()}})
                                @endif
                        </a>
                        <ul class='dropdown-menu dropdown-menu-shipping-cart'>
                            @if(Cart::count()==NULL)
                            <div class='text-center'><i class='fa fa-cart-arrow-down fa-4x'></i>
                                <p class='lead' style='font-size: 16px'>You haven't Fill Your Shopping Cart Yet</p><a class='btn btn-primary btn-lg' href='{{route('shop')}}'>Start Shopping <i class='fa fa-long-arrow-right'></i></a>
                            </div>
                                @else
                                <table class="table table-striped table-hover table-bordered">
                                    <tbody>
                                    <tr>
                                        <th>Item</th>
                                        <th>QTY</th>
                                        <th>Unit Price</th>
                                        <th>Total Price</th>
                                    </tr>
                                    @foreach(Cart::Content() as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->qty}} <a href="{{url('/remove-cart-item/'.$item->rowId)}}">X</a></td>
                                        <td>${{$item->price}}</td>
                                        <td>${{$item->qty*$item->price}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="3"><span class="pull-right">Sub Total</span></th>
                                        <th>${{Cart::subtotal()}}</th>
                                    </tr>
                                    {{--<tr>--}}
                                        {{--<th colspan="3"><span class="pull-right">VAT 0%</span></th>--}}
                                        {{--<th>$0.00</th>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <th colspan="3"><span class="pull-right">Total</span></th>
                                        <th>${{Cart::total()}}</th>
                                    </tr>
                                    <tr>
                                        <td><a href="{{route('shop')}}" class="btn btn-primary">Continue Shopping</a></td>
                                        <td colspan="3"><a href="{{route('checkout')}}" class="pull-right btn btn-success">Checkout</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
