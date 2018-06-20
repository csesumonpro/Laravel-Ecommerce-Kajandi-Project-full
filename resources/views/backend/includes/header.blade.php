
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('page_title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('/public/backend/assets/')}}/css/normalize.css">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/')}}/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/')}}/css/cs-skin-elastic.css">
<!-- <link rel="stylesheet" href="{{asset('/public/backend/assets/')}}/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('public/backend/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/')}}/scss/style.css">
    <link href="{{asset('/public/backend/assets/')}}/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/public/backend/assets/')}}/css/developer.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{asset('/public/backend/images/')}}/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset('/public/backend/images/')}}/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Manufacturer</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{url('/add-manufacturer')}}">Add Manufacturer</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{url('/manufacturer-list')}}">Manufacturer List</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Category</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{url('/add-category')}}">Add Category</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{url('/category-list')}}">Category List</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Sub Category</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{url('/add-sub-category')}}">Add Sub Category</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{url('/sub-category-list')}}">Sub Category List</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Product Model</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{url('/add-model')}}">Add Product Model</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{url('/model-list')}}">Product Model List</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">Product Part</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Products</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{url('/add-product')}}">Add Product </a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{url('/product-list')}}">Product List</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Vendor Part</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Vendors</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('addVendor')}}">Add Vendor </a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{route('vendorList')}}">Vendor List</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{route('vendorBlockedList')}}">Pending/Block List</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Customer Q & A</h3><!-- /.menu-title -->

                <li>
                    <a href="{{route('manage-q-a')}}"> <i class="menu-icon ti-email"></i>Manage Q & A </a>
                </li>
                <h3 class="menu-title">Advert Section</h3><!-- /.menu-title -->

              <li class="menu-item-has-children dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Home Advertise</a>
                  <ul class="sub-menu children dropdown-menu">
                      <li><i class="fa fa-puzzle-piece"></i><a href="{{route('addHomeAdvert')}}">Add Advertise </a></li>
                      <li><i class="fa fa-id-badge"></i><a href="{{route('adrvertList')}}">Ads List</a></li>

                  </ul>
              </li>

                <li>
                    <a href="{{route('manage-order')}}"> <i class="menu-icon ti-email"></i>Manage Order </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Footer Part</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Footer Bottom</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('social-option')}}">Social Option </a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{route('contact-option')}}">Contatc Option</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{route('apps-download-option')}}">Apps Download LInk</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                           <?php $count_unread =  DB::table('contact_forms')->where('status','unread')->count();?>
                            <span class="count bg-primary">{{$count_unread}}</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <?php
                                 $count = DB::table('contact_forms')->count()
                            ?>
                                @if($count_unread>0)
                            <p class="red">You have{{ $count}}  Mails</p>
                                @endif
                        <?php
                                $all_message = DB::table('contact_forms')->orderBy('id','desc')->where('status','unread')->get()->take(5);

                            ?>
                           @foreach($all_message as $contact)
                                <?php
                                $time_message = "";
                                $date_time = $contact->created_at;
                                $date_time_now = date('Y-m-d H:i:s');
                                $start_date = new DateTime($date_time); //Time of Post
                                $end_date = new DateTime($date_time_now); //current Time
                                $interval = $start_date->diff($end_date);
                                if($interval->y >=1){
                                    if($interval->y ==1){
                                        $time_message = $interval->y." year ago";
                                    }else{
                                        $time_message = $interval->y." years ago";
                                    }
                                }elseif($interval->m >=1){
                                    if($interval->d ==0){
                                        $days = " ago";
                                    }elseif($interval->d ==1){
                                        $days = $interval->d." day ago";
                                    }else{
                                        $days = $interval->d." days ago";
                                    }
                                    if($interval->m ==1){
                                        $time_message = $interval->m." month".$days;
                                    }else{
                                        $time_message = $interval->m." months".$days;
                                    }
                                }elseif($interval->d >=1){
                                    if($interval->d ==1){
                                        $time_message = " Yesterday";
                                    }else{
                                        $time_message = $interval->d." days ago";
                                    }
                                }elseif($interval->h >=1){
                                    if($interval->h ==1){
                                        $time_message = $interval->h." hour ago";
                                    }else{
                                        $time_message = $interval->h." hours ago";
                                    }
                                }elseif($interval->i >=1){
                                    if($interval->i ==1){
                                        $time_message = $interval->i." minute ago";
                                    }else{
                                        $time_message = $interval->i." minutes ago";
                                    }
                                }else{
                                    if($interval->s <30){
                                        $time_message = " Just now";
                                    }else{
                                        $time_message = $interval->s." seconds ago";
                                    }
                                }

                                ?>
                            <a class="dropdown-item media bg-flat-color-5" href="{{route('view-contact-message',$contact->id)}}">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('/public/backend/images/')}}/avatar/3.png"></span>
                                <span class="message media-body">
                                    <span class="name float-left">{{$contact->name}}</span>
                                    <span class="time float-right">{{$time_message}}</span>
                                        <p> {!! \Illuminate\Support\Str::words($contact->message, 5,'....')  !!}</p>
                                </span>
                            </a>

                           @endforeach
                                @if($count_unread>0)
                            <a href="{{route('contact-option')}}" class="text-primary text-center">See All Message</a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{asset('/public/backend/images/')}}/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                    </div>
                </div>

                <div class="language-select dropdown" id="language-select">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                        <i class="flag-icon flag-icon-us"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="language" >
                        <div class="dropdown-item">
                            <span class="flag-icon flag-icon-fr"></span>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-es"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-it"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
