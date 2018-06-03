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
    <link rel="stylesheet" href="{{asset('public/frontend/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/mystyles.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.css')}}">

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
        <h3 class="widget-title">Member Login</h3>
        <p>Welcome back, friend. Login to get started</p>
        <hr />
        <p class="alert alert-danger loginformerror" style="display: none;">Email or Password incorrect</p>
        <div class="form-group">
            <label>Email or Username</label>
            <input class="form-control loginemail" type="text" />
            <p class="alert alert-danger emailerror" style="display: none;">
                Email field is empty
            </p>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control loginpassword" type="password" />
            <p class="alert alert-danger passworderror" style="display: none;">
                Password field is empty
            </p>
        </div>
        <div class="checkbox">
            <label>
                <input class="i-check" type="checkbox" />Remeber Me</label>
        </div>
        <input class="btn btn-primary login" type="submit" value="Sign In" />

        <div class="gap gap-small"></div>
        <ul class="list-inline">
            <li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
            </li>
            <li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
            </li>
        </ul>
    </div>
    <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
        <h3 class="widget-title">Create TheBox Account</h3>
        <p>Ready to get best offers? Let's get started!</p>
        <hr />
        <div class="form-group">
            <label>Name</label>
            <input class="form-control name" type="text" />
            <p class="alert alert-danger nameerror" style="display: none;">
                Name field is empty
            </p>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control email" type="text" />
            <p class="alert alert-danger emailerror1" style="display: none;">
                Email field is empty
            </p>
            <p class="alert alert-danger emailerror2" style="display: none;">
                incorrect email field
            </p>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input class="form-control phonenumber" type="text" />
            <p class="alert alert-danger phoneerror" style="display: none;">
                Phone field is empty
            </p>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control password" type="password" />
            <p class="alert alert-danger passworderror" style="display: none;">
                Password field is empty
            </p>
        </div>
        <div class="form-group">
            <label>Repeat Password</label>
            <input class="form-control repeatpassword" type="password" />
            <p class="alert alert-danger repeatpassworderror" style="display: none;">
                Repeat Password field is empty
            </p>
        </div>
        <p class="alert alert-danger passwordcorrespond" style="display: none;">
            Password fields must correspond
        </p>
        <div class="checkbox">
            <label>
                <input class="i-check" type="checkbox" />Subscribe to the Newsletter</label>
        </div>
        <input class="btn btn-primary createaccount" type="submit" value="Create Account" />
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
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('public/frontend/img/')}}/logo.png">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Shop by Category<i class="drop-caret" data-toggle="dropdown"></i></a>
                        <ul class="dropdown-menu dropdown-menu-category">
                            <li><a href="#"><i class="fa fa-home dropdown-menu-category-icon"></i>Home & Garden</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Home & Garden</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Home</a>
                                                            <p>Feugiat at imperdiet proin id</p>
                                                        </li>
                                                        <li><a href="#">Kitchen</a>
                                                            <p>Hac commodo id sed fermentum</p>
                                                        </li>
                                                        <li><a href="#">Furniture & Decor</a>
                                                            <p>Vivamus morbi auctor aliquet enim</p>
                                                        </li>
                                                        <li><a href="#">Bedding & Bath</a>
                                                            <p>Blandit curabitur commodo nunc feugiat</p>
                                                        </li>
                                                        <li><a href="#">Appilances</a>
                                                            <p>Mattis non fringilla conubia consectetur</p>
                                                        </li>
                                                        <li><a href="#">Patio, Lawn & Garden</a>
                                                            <p>Curabitur bibendum semper laoreet sociis</p>
                                                        </li>
                                                        <li><a href="#">Wedding Registry</a>
                                                            <p>Class enim leo eget blandit</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Home Improvement</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Home Improvement</a>
                                                            <p>Rhoncus nisl libero eu dui</p>
                                                        </li>
                                                        <li><a href="#">Lamps & Light Fixtures</a>
                                                            <p>Torquent bibendum integer urna rhoncus</p>
                                                        </li>
                                                        <li><a href="#">Kitchen & Bath Fixtures</a>
                                                            <p>Duis pellentesque quisque donec ligula</p>
                                                        </li>
                                                        <li><a href="#">Home Automation</a>
                                                            <p>Rhoncus ante pharetra tincidunt velit</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/2-i.png" alt="Image Alternative text" title="Image Title" style="right: -10px;" />
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-diamond dropdown-menu-category-icon"></i>Jewelry</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Jewelry</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Necklances & Pendants</a>
                                                            <p>Orci cras condimentum varius tempus</p>
                                                        </li>
                                                        <li><a href="#">Bracelets</a>
                                                            <p>At dolor ut nostra laoreet</p>
                                                        </li>
                                                        <li><a href="#">Rings</a>
                                                            <p>Ridiculus per diam posuere ullamcorper</p>
                                                        </li>
                                                        <li><a href="#">Errings</a>
                                                            <p>Habitant justo sollicitudin duis porta</p>
                                                        </li>
                                                        <li><a href="#">Wedding & Engagement</a>
                                                            <p>Phasellus fusce risus ut sem</p>
                                                        </li>
                                                        <li><a href="#">Charms</a>
                                                            <p>Cras dictumst rutrum cum potenti</p>
                                                        </li>
                                                        <li><a href="#">Booches</a>
                                                            <p>Mollis ligula mollis aliquam lacinia</p>
                                                        </li>
                                                        <li><a href="#">Men's Jewelry</a>
                                                            <p>Pharetra fermentum nec vehicula parturient</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Jewelry Shops</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Contemporary & Designer</a>
                                                            <p>Habitant facilisis platea consequat venenatis</p>
                                                        </li>
                                                        <li><a href="#">Juniors</a>
                                                            <p>Phasellus quam eu a placerat</p>
                                                        </li>
                                                        <li><a href="#">Meternity</a>
                                                            <p>Primis tellus sem rutrum posuere</p>
                                                        </li>
                                                        <li><a href="#">Pettite</a>
                                                            <p>Class eleifend ut euismod pharetra</p>
                                                        </li>
                                                        <li><a href="#">Uniforms, Works & Safety</a>
                                                            <p>Nulla nullam nascetur sociis sed</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/3-i.png" alt="Image Alternative text" title="Image Title" style="right: -10px; bottom: -10px;" />
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-child dropdown-menu-category-icon"></i>Toy & Kids</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Kids Clothing</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Accessories</a>
                                                            <p>Sed conubia eu cras velit</p>
                                                        </li>
                                                        <li><a href="#">Active Wear</a>
                                                            <p>At enim litora amet viverra</p>
                                                        </li>
                                                        <li><a href="#">Coats & Jackets</a>
                                                            <p>Leo consequat molestie vestibulum class</p>
                                                        </li>
                                                        <li><a href="#">Jeans</a>
                                                            <p>Velit inceptos nostra ullamcorper faucibus</p>
                                                        </li>
                                                        <li><a href="#">Sets</a>
                                                            <p>Commodo ad consequat aliquam nostra</p>
                                                        </li>
                                                        <li><a href="#">Indoors</a>
                                                            <p>Rhoncus laoreet lobortis ipsum venenatis</p>
                                                        </li>
                                                        <li><a href="#">Swimwear</a>
                                                            <p>Augue libero libero dis rhoncus</p>
                                                        </li>
                                                        <li><a href="#">Special Occasion</a>
                                                            <p>Fringilla dui nam praesent vel</p>
                                                        </li>
                                                        <li><a href="#">Shoes</a>
                                                            <p>Pellentesque ornare ornare parturient erat</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">More For Kids</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Kids Furniture</a>
                                                            <p>Mus rutrum euismod vivamus tempor</p>
                                                        </li>
                                                        <li><a href="#">Kids Jewelry & Watches</a>
                                                            <p>Sociosqu dignissim facilisi porttitor aenean</p>
                                                        </li>
                                                        <li><a href="#">Toys & Games</a>
                                                            <p>Donec dapibus nullam augue placerat</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/4-i.png" alt="Image Alternative text" title="Image Title" />
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-plug dropdown-menu-category-icon"></i>Electronics</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Electronics</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">TV & Video</a>
                                                            <p>Augue pulvinar dolor lobortis vivamus</p>
                                                        </li>
                                                        <li><a href="#">Home Audio & Theater</a>
                                                            <p>Ornare conubia tortor gravida lacus</p>
                                                        </li>
                                                        <li><a href="#">Camera, Photo & Video</a>
                                                            <p>Arcu sem cum platea pretium</p>
                                                        </li>
                                                        <li><a href="#">Cell Phones & Accessories</a>
                                                            <p>Nascetur suspendisse metus gravida vulputate</p>
                                                        </li>
                                                        <li><a href="#">Headphones</a>
                                                            <p>Lectus mattis nunc lectus hendrerit</p>
                                                        </li>
                                                        <li><a href="#">Video Games</a>
                                                            <p>Quis sem quisque nisi suscipit</p>
                                                        </li>
                                                        <li><a href="#">Gar Electronics</a>
                                                            <p>Nibh eu nostra torquent dolor</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Computers</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Laptops & Tablets</a>
                                                            <p>Suspendisse iaculis lobortis hac sociosqu</p>
                                                        </li>
                                                        <li><a href="#">Desktops & Monitors</a>
                                                            <p>Habitasse pharetra etiam ante mauris</p>
                                                        </li>
                                                        <li><a href="#">Computer Accessories</a>
                                                            <p>Congue phasellus sollicitudin fringilla suspendisse</p>
                                                        </li>
                                                        <li><a href="#">Software</a>
                                                            <p>Risus auctor risus metus fames</p>
                                                        </li>
                                                        <li><a href="#">Printers & Ink</a>
                                                            <p>Auctor faucibus dignissim litora placerat</p>
                                                        </li>
                                                        <li><a href="#">Networking</a>
                                                            <p>Tristique ligula viverra erat aenean</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/5-i.html" alt="Image Alternative text" title="Image Title" />
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-tags dropdown-menu-category-icon"></i>Clothes & Shoes</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">TheBox Fashion</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Woman</a>
                                                            <p>Justo augue nunc ornare per</p>
                                                        </li>
                                                        <li><a href="#">Men</a>
                                                            <p>Lobortis curabitur eleifend facilisi himenaeos</p>
                                                        </li>
                                                        <li><a href="#">Girls</a>
                                                            <p>Penatibus quis tristique massa massa</p>
                                                        </li>
                                                        <li><a href="#">Boys</a>
                                                            <p>Placerat natoque class mi viverra</p>
                                                        </li>
                                                        <li><a href="#">Baby</a>
                                                            <p>Turpis sollicitudin augue conubia vulputate</p>
                                                        </li>
                                                        <li><a href="#">Luggage</a>
                                                            <p>Vulputate viverra bibendum laoreet elit</p>
                                                        </li>
                                                        <li><a href="#">Accessories</a>
                                                            <p>Nisl felis fermentum sit ridiculus</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/6-i.png" alt="Image Alternative text" title="Image Title" style="right: -20px;" />
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-futbol-o dropdown-menu-category-icon"></i>Sports</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Sports</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Athletic Clothing</a>
                                                            <p>Sapien elementum libero sodales volutpat</p>
                                                        </li>
                                                        <li><a href="#">Exorcise & Fitness</a>
                                                            <p>Facilisi fusce ornare tempor at</p>
                                                        </li>
                                                        <li><a href="#">Hunting & Fishing</a>
                                                            <p>Donec mollis turpis penatibus etiam</p>
                                                        </li>
                                                        <li><a href="#">Team Sports</a>
                                                            <p>Hac auctor per est libero</p>
                                                        </li>
                                                        <li><a href="#">Fan Sports</a>
                                                            <p>Senectus dictum inceptos pellentesque cras</p>
                                                        </li>
                                                        <li><a href="#">Golf</a>
                                                            <p>Sagittis imperdiet fermentum luctus nisi</p>
                                                        </li>
                                                        <li><a href="#">Sports Collections</a>
                                                            <p>Libero facilisi semper dignissim faucibus</p>
                                                        </li>
                                                        <li><a href="#">Camping & Hiking</a>
                                                            <p>Turpis nulla penatibus dictum accumsan</p>
                                                        </li>
                                                        <li><a href="#">Cycling</a>
                                                            <p>Taciti non rutrum vel accumsan</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/7-i.png" alt="Image Alternative text" title="Image Title" style="right: -39px;" />
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-music dropdown-menu-category-icon"></i>Entertaiment</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Entertaiment</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Video Games & Consoles</a>
                                                            <p>Conubia fusce nascetur aliquam sed</p>
                                                        </li>
                                                        <li><a href="#">Music</a>
                                                            <p>Nascetur donec in pulvinar phasellus</p>
                                                        </li>
                                                        <li><a href="#">DVD & Movies</a>
                                                            <p>Posuere at metus integer justo</p>
                                                        </li>
                                                        <li><a href="#">Tickets</a>
                                                            <p>Mauris elit vehicula dictumst potenti</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Memorabilia</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Autographs</a>
                                                        </li>
                                                        <li><a href="#">Movie</a>
                                                        </li>
                                                        <li><a href="#">Music</a>
                                                        </li>
                                                        <li><a href="#">Television</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/9-i.png" alt="Image Alternative text" title="Image Title" style="right: -27px;" />
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-location-arrow dropdown-menu-category-icon"></i>Travel</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Travel Equepment</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Luggage</a>
                                                            <p>Mattis aliquet habitant convallis interdum</p>
                                                        </li>
                                                        <li><a href="#">Travel Accessories</a>
                                                            <p>Tortor quam primis mi eleifend</p>
                                                        </li>
                                                        <li><a href="#">Luggage Accessories</a>
                                                            <p>Proin viverra venenatis etiam cum</p>
                                                        </li>
                                                        <li><a href="#">Lodging</a>
                                                            <p>Taciti felis proin fringilla sociosqu</p>
                                                        </li>
                                                        <li><a href="#">Maps</a>
                                                            <p>Per sociis convallis taciti nullam</p>
                                                        </li>
                                                        <li><a href="#">Other Travel</a>
                                                            <p>Euismod torquent lacus et fermentum</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Booking</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Vacation Packages</a>
                                                            <p>Libero maecenas dui ornare cursus</p>
                                                        </li>
                                                        <li><a href="#">Campground & RV</a>
                                                            <p>Mattis mi magna suspendisse lorem</p>
                                                        </li>
                                                        <li><a href="#">Rail</a>
                                                            <p>Semper nascetur torquent sociosqu dictum</p>
                                                        </li>
                                                        <li><a href="#">Car Rental</a>
                                                            <p>Blandit condimentum nec dolor rutrum</p>
                                                        </li>
                                                        <li><a href="#">Cruises</a>
                                                            <p>Sociosqu curae vivamus taciti ut</p>
                                                        </li>
                                                        <li><a href="#">Airline</a>
                                                            <p>Montes condimentum aptent pulvinar duis</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/11-i.png" alt="Image Alternative text" title="Image Title" style="right: -100px;" />
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-picture-o dropdown-menu-category-icon"></i>Art & Design</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Art</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Paintings from Dealers & Resellers</a>
                                                            <p>Pharetra natoque commodo convallis eu</p>
                                                        </li>
                                                        <li><a href="#">Paintings Direct from Artist</a>
                                                            <p>Convallis habitasse rhoncus adipiscing velit</p>
                                                        </li>
                                                        <li><a href="#">Art Prints</a>
                                                            <p>Habitant blandit maecenas rhoncus lacus</p>
                                                        </li>
                                                        <li><a href="#">Art Photographs from Resellers</a>
                                                            <p>Nam rhoncus ridiculus laoreet curae</p>
                                                        </li>
                                                        <li><a href="#">Art Photographs from the Artist</a>
                                                            <p>Litora porttitor potenti habitant pellentesque</p>
                                                        </li>
                                                        <li><a href="#">Art Posters</a>
                                                            <p>Ridiculus congue commodo velit porta</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Design</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Home Decor Decals</a>
                                                            <p>Venenatis tempus libero porta consectetur</p>
                                                        </li>
                                                        <li><a href="#">Furniture</a>
                                                            <p>Pellentesque primis magna ultrices tristique</p>
                                                        </li>
                                                        <li><a href="#">Wallpapers</a>
                                                            <p>Torquent facilisis dui neque mi</p>
                                                        </li>
                                                        <li><a href="#">Bar Flasks</a>
                                                            <p>Sodales fusce cursus primis fusce</p>
                                                        </li>
                                                        <li><a href="#">Posters & Prints</a>
                                                            <p>Cubilia nulla commodo malesuada vestibulum</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/12-i.png" alt="Image Alternative text" title="Image Title" />
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-motorcycle dropdown-menu-category-icon"></i>Motors</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Motors</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Parts & Accessories</a>
                                                            <p>Justo praesent morbi pellentesque mi</p>
                                                        </li>
                                                        <li><a href="#">Cars & Trucks</a>
                                                            <p>Dignissim donec mus justo nisl</p>
                                                        </li>
                                                        <li><a href="#">Motorcycles</a>
                                                            <p>Porta mattis aptent mus pretium</p>
                                                        </li>
                                                        <li><a href="#">Passenger Vehicles</a>
                                                            <p>Suspendisse turpis cras mauris leo</p>
                                                        </li>
                                                        <li><a href="#">Industry Vehicles</a>
                                                            <p>Vehicula vehicula sapien nulla odio</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Brands</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">BMW</a>
                                                        </li>
                                                        <li><a href="#">Land Rover</a>
                                                        </li>
                                                        <li><a href="#">Nissan</a>
                                                        </li>
                                                        <li><a href="#">Honda</a>
                                                        </li>
                                                        <li><a href="#">Ford</a>
                                                        </li>
                                                        <li><a href="#">Porsche</a>
                                                        </li>
                                                        <li><a href="#">Audi</a>
                                                        </li>
                                                        <li><a href="#">Mercedes-Benz</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/13-i.png" alt="Image Alternative text" title="Image Title" style="right: -15px; bottom: -15px;" />
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-paw dropdown-menu-category-icon"></i>Pets</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <h5 class="dropdown-menu-category-title">Pet Supplies</h5>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Backyard Poultry Supplies</a>
                                                            <p>Ultricies rhoncus ultrices faucibus sapien</p>
                                                        </li>
                                                        <li><a href="#">Bird Supplies</a>
                                                            <p>At suspendisse per mauris vitae</p>
                                                        </li>
                                                        <li><a href="#">Cat Supplies</a>
                                                            <p>Accumsan sed dictum potenti dui</p>
                                                        </li>
                                                        <li><a href="#">Dog Supplies</a>
                                                            <p>Porta id volutpat sem scelerisque</p>
                                                        </li>
                                                        <li><a href="#">Pet Memorials & Urns</a>
                                                            <p>Dui aliquam parturient blandit et</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Fish & Aquariums</a>
                                                            <p>Nam augue aenean ornare sagittis</p>
                                                        </li>
                                                        <li><a href="#">Horse Supplies</a>
                                                            <p>Ultricies nisi ut laoreet morbi</p>
                                                        </li>
                                                        <li><a href="#">Reptile Supplies</a>
                                                            <p>Erat eget pretium rutrum vitae</p>
                                                        </li>
                                                        <li><a href="#">Small Animal Supplies</a>
                                                            <p>Consequat hendrerit viverra duis posuere</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Wholesale Lots</a>
                                                            <p>Neque vivamus vestibulum neque commodo</p>
                                                        </li>
                                                        <li><a href="#">Other Pet Supplies</a>
                                                            <p>Conubia phasellus sociosqu conubia eros</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/14-i.png" alt="Image Alternative text" title="Image Title" style="right: -15px;" />
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-cubes dropdown-menu-category-icon"></i>Hobbies & DIY</a>
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">Hobby & DIY</h5>
                                                    <ul class="dropdown-menu-category-list">
                                                        <li><a href="#">Model & Kit Tools</a>
                                                            <p>Auctor ridiculus egestas velit congue</p>
                                                        </li>
                                                        <li><a href="#">Supplies & Engines</a>
                                                            <p>Dapibus nibh hendrerit curabitur donec</p>
                                                        </li>
                                                        <li><a href="#">RC Airline & Helicopter</a>
                                                            <p>Neque sociis sapien nisi mi</p>
                                                        </li>
                                                        <li><a href="#">RC Car, Truck & motorcycle</a>
                                                            <p>Sociis convallis nascetur etiam feugiat</p>
                                                        </li>
                                                        <li><a href="#">Military Airline Models & Kits</a>
                                                            <p>Quam sociis diam sagittis quis</p>
                                                        </li>
                                                        <li><a href="#">Craft Airbrushing Supplies</a>
                                                            <p>Non arcu dictumst proin nulla</p>
                                                        </li>
                                                        <li><a href="#">Card Making Supplies</a>
                                                            <p>Etiam volutpat rutrum bibendum phasellus</p>
                                                        </li>
                                                        <li><a href="#">Craft Sewing</a>
                                                            <p>Cursus magnis praesent nisi dictumst</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="dropdown-menu-category-section-theme-img" src="{{asset('public/frontend/img/')}}/test_cat/15-i.html" alt="Image Alternative text" title="Image Title" style="height: 100%;" />
                                    </div>
                                </div>
                            </li>
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
                                            <li><a href="shopping-cart.html">Shopping Cart</a>
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
                <form class="navbar-form navbar-left navbar-main-search" role="search">
                    <div class="form-group">
                        <input class="form-control" id="searchbox" type="text" placeholder="Search the Entire Store..." />
                    </div>
                    <a class="fa fa-search navbar-main-search-submit" href="#" style="z-index: 4"></a>
                </form>
                <div class="showresult">

                </div>
                <ul class="nav navbar-nav navbar-right" >
                    <li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text">Sign In</a>
                    </li>
                    <li><a href="#nav-account-dialog" data-effect="mfp-move-from-top" class="popup-text">Create Account</a>
                    </li>

                    <li class="dropdown">
                        <a class="fa fa-shopping-cart" href="mycart.html"></a>
                        <ul class='dropdown-menu dropdown-menu-shipping-cart'>
                            <div class='text-center'><i class='fa fa-cart-arrow-down fa-4x'></i>
                                <p class='lead' style='font-size: 16px'>You haven't Fill Your Shopping Cart Yet</p><a class='btn btn-primary btn-lg' href='#'>Start Shopping <i class='fa fa-long-arrow-right'></i></a>
                            </div></ul>                        </li>
                </ul>
            </div>
        </div>
    </nav>