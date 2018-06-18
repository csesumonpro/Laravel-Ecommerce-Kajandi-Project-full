<!DOCTYPE html>
<html>

<head>
    <!--  Meta and Title  -->
    <meta charset="utf-8">
    <title>Alliance - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  Fonts  -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!--  Icomoon  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/seller')}}/assets/fonts/icomoon/icomoon.css">

    <!--  FullCalendar  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/seller')}}/assets/js/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/seller')}}/assets/js/plugins/magnific/magnific-popup.css">

    <!--  Plugins  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/seller')}}/assets/js/plugins/c3charts/c3.min.css">

    <!--  CSS - theme  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/seller')}}/assets/skin/default_skin/css/theme.css">

    <!--  CSS - allcp forms  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/seller')}}/assets/allcp/forms/css/forms.css">

    <!--  Favicon  -->
    <link rel="shortcut icon" href="{{asset('public/seller')}}/assets/img/favicon.ico">

    <!--  IE8 HTML5 support   -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="sales-stats-page">

<!-- -------------- Customizer -------------- -->
<div id="customizer">
    <div class="panel">
        <div class="panel-heading">
        <span class="panel-icon">
          <i class="fa fa-cogs"></i>
        </span>
            <span class="panel-title"> Theme Options</span>
        </div>
        <div class="panel-body pn">
            <ul class="nav nav-list nav-list-sm" role="tablist">
                <li class="active">
                    <a href="#customizer-header" role="tab" data-toggle="tab">Navbar</a>
                </li>
                <li>
                    <a href="#customizer-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                </li>
                <li>
                    <a href="#customizer-settings" role="tab" data-toggle="tab">Misc</a>
                </li>
            </ul>
            <div class="tab-content p20 ptn pb15">
                <div role="tabpanel" class="tab-pane active" id="customizer-header">
                    <form id="customizer-header-skin">
                        <h6 class="mv20">Header Skins</h6>

                        <div class="customizer-sample">
                            <table>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-dark mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin5" checked
                                                   value="bg-dark">
                                            <label for="headerSkin5">Dark</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-warning mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin2" value="bg-warning">
                                            <label for="headerSkin2">Warning</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-danger mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin3" value="bg-danger">
                                            <label for="headerSkin3">Danger</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-success mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin4" value="bg-success">
                                            <label for="headerSkin4">Success</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-primary mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin6" value="bg-primary">
                                            <label for="headerSkin6">Primary</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-info mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin7" value="bg-info">
                                            <label for="headerSkin7">Info</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-alert mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin8" value="bg-alert">
                                            <label for="headerSkin8">Alert</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-system mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin9" value="bg-system">
                                            <label for="headerSkin9">System</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <div class="checkbox-custom checkbox-disabled fill mb10">
                                <input type="radio" name="headerSkin" id="headerSkin1" value="bgc-light">
                                <label for="headerSkin1">Light</label>
                            </div>
                        </div>
                    </form>
                    <form id="customizer-footer-skin">
                        <h6 class="mv20">Footer Skins</h6>

                        <div class="customizer-sample">
                            <table>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-dark mb10">
                                            <input type="radio" name="footerSkin" id="footerSkin1" checked value="">
                                            <label for="footerSkin1">Dark</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom checkbox-disabled fill mb10">
                                            <input type="radio" name="footerSkin" id="footerSkin2" value="footer-light">
                                            <label for="footerSkin2">Light</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="customizer-sidebar">
                    <form id="customizer-sidebar-skin">
                        <h6 class="mv20">Sidebar Skins</h6>

                        <div class="customizer-sample">
                            <div class="checkbox-custom fill checkbox-dark mb10">
                                <input type="radio" name="sidebarSkin" checked id="sidebarSkin2" value="">
                                <label for="sidebarSkin2">Dark</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-disabled mb10">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                <label for="sidebarSkin1">Light</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="customizer-settings">
                    <form id="customizer-settings-misc">
                        <h6 class="mv20 mtn">Layout Options</h6>

                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" checked="" id="header-option">
                                <label for="header-option">Fixed Header</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" checked="" id="sidebar-option">
                                <label for="sidebar-option">Fixed Sidebar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" id="breadcrumb-option">
                                <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" id="breadcrumb-hidden">
                                <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-group mn pb35 pt25 text-center">
                <a href="#" id="clearAll" class="btn btn-primary btn-bordered btn-sm">Clear All</a>
            </div>
        </div>
    </div>
</div>
<!-- -------------- /Customizer -------------- -->

<!-- -------------- Body Wrap  -------------- -->
<div id="main">

    <!-- -------------- Header  -------------- -->
    <header class="navbar navbar-fixed-top bg-dark">
        <div class="navbar-logo-wrapper">
            <a class="navbar-logo-text" href="dashboard1.html">
                <b>Alliance</b>
            </a>
            <span id="sidebar_left_toggle" class="ad ad-lines"></span>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown dropdown-fuse hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">One more action</a></li>
                    <li><a href="#">More actions if needed</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated action</a></li>
                </ul>
            </li>
            <li class="hidden-xs">
                <a class="navbar-fullscreen toggle-active" href="#">
                    <span class="glyphicon glyphicon-fullscreen"></span>
                </a>
            </li>
        </ul>
        <form class="navbar-form navbar-left search-form square" role="search">
            <div class="input-group add-on">

                <input type="text" class="form-control" placeholder="Search..." onfocus="this.placeholder=''"
                       onblur="this.placeholder='Search...'">

                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>

            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li class="hidden-xs">
                <div class="navbar-btn btn-group">
                    <a href="#" class="topbar-dropmenu-toggle btn" data-toggle="button">
                        <span class="fa fa-magic fs20 text-info"></span>
                    </a>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn dropdown-toggle">
                        <span class="fa fa-envelope fs20 text-danger"></span>
                    </button>
                    <button data-toggle="dropdown" class="btn dropdown-toggle fs18 visible-xl">
                        3
                    </button>
                    <div class="dropdown-menu keep-dropdown w375 animated animated-shorter fadeIn" role="menu">
                        <div class="panel mbn">
                            <div class="panel-menu">
                                <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                    <a href="#nav-tab1" data-toggle="tab"
                                       class="btn btn-primary btn-bordered btn-sm active">Activity</a>
                                    <a href="#nav-tab2" data-toggle="tab"
                                       class="btn btn-primary btn-bordered btn-sm br-l-n br-r-n">Messages</a>
                                    <a href="#nav-tab3" data-toggle="tab" class="btn btn-primary btn-bordered btn-sm">Notifications</a>
                                </div>
                            </div>
                            <div class="panel-body panel-scroller scroller-overlay scroller-navbar pn">
                                <div class="tab-content br-n pn">
                                    <div id="nav-tab1" class="tab-pane active" role="tabpanel">
                                        <ul class="media-list" role="menu">
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="{{asset('public/seller')}}/assets/img/avatars/5.jpg"
                                                                                     class="mw40 br2" alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small class="text-muted">- 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="{{asset('public/seller')}}/assets/img/avatars/2.jpg"
                                                                                     class="mw40 br2" alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small> - 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="{{asset('public/seller')}}/assets/img/avatars/3.jpg"
                                                                                     class="mw40 br2" alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small class="text-muted">- 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="{{asset('public/seller')}}/assets/img/avatars/4.jpg"
                                                                                     class="mw40 br2" alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small class="text-muted">- 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="{{asset('public/seller')}}/assets/img/avatars/5.jpg"
                                                                                     class="mw40 br2" alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small class="text-muted">- 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="{{asset('public/seller')}}/assets/img/avatars/2.jpg"
                                                                                     class="mw40 br2" alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small> - 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="{{asset('public/seller')}}/assets/img/avatars/3.jpg"
                                                                                     class="mw40 br2" alt="avatar">
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New post
                                                        <small class="text-muted">- 09/01/15</small>
                                                    </h5>
                                                    Last Updated 5 days ago by
                                                    <a class="" href="#"> John Doe </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="{{asset('public/seller')}}/assets/img/avatars/3.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <span class="media-status online"></span>
                                                <h5 class="media-heading">Frank Hill
                                                    <small> - 14:10am</small>
                                                </h5>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <span class="media-status offline"></span>
                                                <h5 class="media-heading">George Kelly
                                                    <small> - 15:25am</small>
                                                </h5>
                                                Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                aliquam erat volutpat.
                                            </div>
                                            <div class="media-right">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="{{asset('public/seller')}}/assets/img/avatars/1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="{{asset('public/seller')}}/assets/img/avatars/2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <span class="media-status online"></span>
                                                <h5 class="media-heading">Frank Hill
                                                    <small> - 15:33am</small>
                                                </h5>
                                                Lorem ipsum dolor sit amet, nonummy nibh euismod tinc consectetuer
                                                adipiscing elit.
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <span class="media-status offline"></span>
                                                <h5 class="media-heading">George Kelly
                                                    <small> - 15:43am</small>
                                                </h5>
                                                Euismod sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                                magna aliquam erat volutpat.
                                            </div>
                                            <div class="media-right">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="{{asset('public/seller')}}/assets/img/avatars/1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="{{asset('public/seller')}}/assets/img/avatars/2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <span class="media-status online"></span>
                                                <h5 class="media-heading">Frank Hill
                                                    <small> - 16:30am</small>
                                                </h5>
                                                Corem ipsum dolor sit amet, nonummy nibh euismod tinc co.
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <span class="media-status offline"></span>
                                                <h5 class="media-heading">George Kelly
                                                    <small> - 12:30am</small>
                                                </h5>
                                                Ubh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                            </div>
                                            <div class="media-right">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="{{asset('public/seller')}}/assets/img/avatars/1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nav-tab3" class="tab-pane alerts-widget" role="tabpanel">
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="fa fa-shopping-cart text-success"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Product Order
                                                    <small class="text-muted"></small>
                                                </h5>
                                                <a href="#">iPad Air</a> - 3 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Confirm?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-cog"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="fa fa-comment text-system"></span>
                                            </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New User Comment
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Sam Fisher - I'd like to read more!
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response text-right"> Moderate?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="fa fa-eye text-warning"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New User Review
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Sebastian Jones - 5 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Approve?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span class="fa fa-user text-info"></span>
                                            </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New User Registration
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Carlos Santiyago - 7 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Approve?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span class="fa fa-user text-info"></span>
                                            </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New User Registration
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Douglas Adams - 13 hours ago

                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Approve?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="fa fa-info text-alert"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Invoice
                                                    <small class="text-muted"></small>
                                                </h5>
                                                <a href="#">iPad Air</a> - 14 hours ago

                                            </div>
                                            <div class="media-right">
                                                <div class="media-response single">#1234567</div>
                                                <button type="button"
                                                        class="btn btn-default btn-sm btn-bordered light">
                                                    <i class="fa fa-link"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="fa fa-shopping-cart text-success"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Product Order
                                                    <small class="text-muted"></small>
                                                </h5>
                                                <a href="#">iPad Air</a> - 14 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Confirm?</div>
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-cog"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="#" class="btn btn-primary btn-sm btn-bordered"> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn dropdown-toggle">
                        <span class="fa fa-bell fs20 text-primary"></span>
                    </button>
                    <button data-toggle="dropdown" class="btn dropdown-toggle fs18 visible-xl">
                        8
                    </button>
                    <div class="dropdown-menu keep-dropdown w375 animated animated-shorter fadeIn" role="menu">
                        <div class="panel mbn">
                            <div class="panel-menu">
                                <span class="panel-icon"><i class="fa fa-tasks"></i></span>
                                <span class="panel-title fw600"> Activity reports</span>
                                <button class="btn btn-default light btn-xs btn-bordered pull-right" type="button"><i
                                        class="fa fa-refresh"></i>
                                </button>
                            </div>
                            <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                                <ol class="timeline-list">
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-dark light">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>John Doe</b> Sent you a message.
                                            <a href="#">View now</a>
                                        </div>
                                        <div class="timeline-date">11:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> created invoice for:
                                            <a href="#">iPad Air</a>
                                        </div>
                                        <div class="timeline-date">6:26pm</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> created invoice for:
                                            <a href="#">iPhone 5s</a>
                                        </div>
                                        <div class="timeline-date">11:45am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-dark light">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Lara Johnes</b> Sent you a message.
                                            <a href="#">View now</a>
                                        </div>
                                        <div class="timeline-date">3:18pm</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-primary">
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Richard Johnes</b> Added to wishlist:
                                            <a href="#">iPhone 5c</a>
                                        </div>
                                        <div class="timeline-date">8:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <span class="fa fa-info"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> created invoice for:
                                            <a href="#">Mac Pro</a>
                                        </div>
                                        <div class="timeline-date">9:29pm</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-primary">
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Douglas Adams</b> Added to wishlist:
                                            <a href="#">iPad 4</a>
                                        </div>
                                        <div class="timeline-date">3:05am</div>
                                    </li>
                                </ol>

                            </div>
                            <div class="panel-footer text-center">
                                <a href="#" class="btn btn-primary btn-sm btn-bordered"> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn btn-md dropdown-toggle">
                        EN
                    </button>
                    <ul class="dropdown-menu pv5 animated animated-short fadeIn" role="menu">
                        <li>
                            <a href="javascript:void(0);"> Spanish </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> Italian </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown dropdown-fuse">
                <a href="#" class="dropdown-toggle fw600" data-toggle="dropdown">
                    <span class="hidden-xs"><name>Doug Adams</name> </span>
                    <span class="fa fa-caret-down hidden-xs mr15"></span>
                    <img src="{{asset('public/seller')}}/assets/img/avatars/profile_avatar.jpg" alt="avatar" class="mw55">
                </a>
                <ul class="dropdown-menu list-group keep-dropdown w250" role="menu">
                    <li class="dropdown-header clearfix">
                        <div class="pull-left ml10">
                            <select id="user-status">
                                <optgroup label="Current Status:">
                                    <option value="1-1">Away</option>
                                    <option value="1-2">Busy</option>
                                    <option value="1-3" selected="selected">Online</option>
                                    <option value="1-4">Offline</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="pull-right mr10">
                            <select id="user-role">
                                <optgroup label="Logged in As:">
                                    <option value="1-1" selected="selected">Admin</option>
                                    <option value="1-2">Editor</option>
                                    <option value="1-3">User</option>
                                </optgroup>
                            </select>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-envelope-o"></span> Messages
                            <span class="label label-warning">54</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-users"></span> Friends
                            <span class="label label-warning">6</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-bell"></span> Notifications </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-cogs"></span> Settings </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a class="btn btn-primary btn-sm btn-bordered" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>
                            <span class="fa fa-power-off pr5"></span> Logout </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
           </form>>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- -------------- /Header  -------------- -->

    <!-- -------------- Sidebar  -------------- -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- -------------- Sidebar Left Wrapper  -------------- -->
        <div class="sidebar-left-content nano-content">

            <!-- -------------- Sidebar Header -------------- -->
            <header class="sidebar-header">

                <!-- -------------- Sidebar - Author -------------- -->
                <div class="sidebar-widget author-widget">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="{{asset('public/seller')}}/assets/img/avatars/profile_avatar.jpg" class="img-responsive">
                        </a>

                        <div class="media-body">
                            <div class="media-links">
                                <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="utility-login.html">Logout</a>
                            </div>
                            <div class="media-author">Douglas Adams</div>
                        </div>
                    </div>
                </div>

                <!-- -------------- Sidebar - Author Menu  -------------- -->
                <div class="sidebar-widget menu-widget">
                    <div class="row text-center mbn">
                        <div class="col-xs-2 pln prn">
                            <a href="dashboard1.html" class="text-primary" data-toggle="tooltip" data-placement="top"
                               title="Dashboard">
                                <span class="fa fa-dashboard"></span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 pln prn">
                            <a href="charts-highcharts.html" class="text-info" data-toggle="tooltip"
                               data-placement="top"
                               title="Stats">
                                <span class="fa fa-bar-chart-o"></span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 pln prn">
                            <a href="sales-stats-products.html" class="text-system" data-toggle="tooltip"
                               data-placement="top" title="Orders">
                                <span class="fa fa-info-circle"></span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 pln prn">
                            <a href="sales-stats-purchases.html" class="text-warning" data-toggle="tooltip"
                               data-placement="top" title="Invoices">
                                <span class="fa fa-file"></span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 pln prn">
                            <a href="basic-profile.html" class="text-alert" data-toggle="tooltip" data-placement="top"
                               title="Users">
                                <span class="fa fa-users"></span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2 pln prn">
                            <a href="management-tools-dock.html" class="text-danger" data-toggle="tooltip"
                               data-placement="top" title="Settings">
                                <span class="fa fa-cogs"></span>
                            </a>
                        </div>
                    </div>
                </div>

            </header>
            <!-- -------------- /Sidebar Header -------------- -->

            <!-- -------------- Sidebar Menu  -------------- -->
            <ul class="nav sidebar-menu">
                <li class="sidebar-label pt30">Menu</li>

                <li>
                    <a class="accordion-toggle menu-open" href="#">
                        <span class="fa fa-dashboard"></span>
                        <span class="sidebar-title">Dashboard</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="dashboard1.html">
                                <span class="fa fa-file-text-o"></span> Layout 1 </a>
                        </li>
                        <li class="active">
                            <a href="dashboard2.html">
                                <span class="fa fa-file-text-o"></span> Layout 2 </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-label pt25">Tools</li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-share-square-o"></span>
                        <span class="sidebar-title">Sales stats</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="dashboard2.html">
                                <span class="glyphicon glyphicon-tags"></span> Overview </a>
                        </li>
                        <li>
                            <a href="sales-stats-products.html">
                                <span class="glyphicon glyphicon-tags"></span> Products </a>
                        </li>
                        <li>
                            <a href="sales-stats-purchases.html">
                                <span class="fa fa-money"></span> Purchases </a>
                        </li>
                        <li>
                            <a href="sales-stats-clients.html">
                                <span class="fa fa-users"></span> Clients </a>
                        </li>
                        <li>
                            <a href="sales-stats-general-settings.html">
                                <span class="fa fa-gears"></span> General Settings </a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-desktop"></span>
                        <span class="sidebar-title">Layout Templates</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="fa fa fa-arrows-h"></span>
                                Sidebars
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="sidebar-left-static.html">
                                        Left Static </a>
                                </li>
                                <li>
                                    <a href="sidebar-left-fixed.html">
                                        Left Fixed </a>
                                </li>
                                <li>
                                    <a href="sidebar-left-minified.html">
                                        Left Minified </a>
                                </li>
                                <li>
                                    <a href="sidebar-right-fixed.html">
                                        Right Fixed </a>
                                </li>
                                <li>
                                    <a href="sidebar-right-menu.html">
                                        Right Static </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="fa fa-arrows-v"></span>
                                Navigation
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="navigation-static.html">
                                        Static </a>
                                </li>
                                <li>
                                    <a href="navigation-fixed.html">
                                        Fixed </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="fa fa-hand-o-up"></span>
                                Top Panel
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="top-panel.html">
                                        Default </a>
                                </li>
                                <li>
                                    <a href="top-panel-menu.html">
                                        With Menu </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="fa fa-arrows-v"></span>
                                Content
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="content-blank.html">
                                        Blank </a>
                                </li>
                                <li>
                                    <a href="content-fixed.html">
                                        Fixed </a>
                                </li>
                                <li>
                                    <a href="content-hero.html">
                                        Hero Content </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="fa fa-pause"></span>
                                Content Chutes
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="chute-left.html">
                                        Left Static </a>
                                </li>
                                <li>
                                    <a href="chute-left-fixed.html">
                                        Left Fixed </a>
                                </li>
                                <li>
                                    <a href="chute-right.html">
                                        Right Static </a>
                                </li>
                                <li>
                                    <a href="chute-right-fixed.html">
                                        Right Fixed </a>
                                </li>
                                <li>
                                    <a href="chute-both.html">
                                        Left &amp; Right Static </a>
                                </li>
                                <li>
                                    <a href="chute-both-fixed.html">
                                        Left &amp; Right Fixed </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="fa fa-plus-square-o"></span>
                                Boxed Frontpage
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="boxed-default.html">
                                        Default </a>
                                </li>
                                <li>
                                    <a href="horizontal-navigation-boxed.html">
                                        Optional Navigation </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="fa fa-arrow-circle-o-up"></span>
                                Horizontal Navigation
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="horizontal-navigation-small-menu.html">
                                        Small Menu</a>
                                </li>
                                <li>
                                    <a href="horizontal-navigation-medium-menu.html">
                                        Medium Menu</a>
                                </li>
                                <li>
                                    <a href="horizontal-navigation-large-menu.html">
                                        Large Menu</a>
                                </li>
                                <li>
                                    <a href="horizontal-navigation-top-panel.html">
                                        With Top Panel</a>
                                </li>
                                <li>
                                    <a href="horizontal-navigation-collapsing-top-panel.html">
                                        Collapsing Top Panel</a>
                                </li>
                                <li>
                                    <a href="horizontal-navigation-boxed.html">
                                        Boxed Layout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-wrench"></span>
                        <span class="sidebar-title">Management Tools</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="management-tools-panels.html">
                                <span class="glyphicon glyphicon-book"></span> Panels </a>
                        </li>
                        <li>
                            <a href="management-tools-modals.html">
                                <span class="glyphicon glyphicon-modal-window"></span> Modals </a>
                        </li>
                        <li>
                            <a href="management-tools-dock.html">
                                <span class="glyphicon glyphicon-equalizer"></span> Dock </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-check-square-o"></span>
                        <span class="sidebar-title">Forms</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="forms-elements.html">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Elements </a>
                        </li>
                        <li>
                            <a href="forms-widgets.html">
                                <span class="glyphicon glyphicon-calendar"></span> Widgets </a>
                        </li>
                        <li>
                            <a href="forms-layouts.html">
                                <span class="fa fa-desktop"></span> Layouts </a>
                        </li>
                        <li>
                            <a href="forms-wizard.html">
                                <span class="fa fa-clipboard"></span> Wizard </a>
                        </li>
                        <li>
                            <a href="forms-validation.html">
                                <span class="glyphicon glyphicon-check"></span> Validation </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-label pt30">Elements</li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-cogs"></span>
                        <span class="sidebar-title">Widgets</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="widgets-panels.html">
                                <span class="fa fa-desktop"></span> Panels </a>
                        </li>
                        <li>
                            <a href="widgets-scrollers-tiles.html">
                                <span class="fa fa-columns"></span> Scrollers &amp; Tiles</a>
                        </li>
                        <li>
                            <a href="widgets-tools.html">
                                <span class="fa fa-dot-circle-o"></span> Tools </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="email-layouts.html">
                        <span class="fa fa-envelope-o"></span>
                        <span class="sidebar-title">Email Layouts</span>
                    </a>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-star-half-full "></span>
                        <span class="sidebar-title">User Interface</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="user-interface-alerts.html">
                                <span class="fa fa-warning"></span> Alerts </a>
                        </li>
                        <li>
                            <a href="user-interface-buttons.html">
                                <span class="fa fa-plus-square-o"></span> Buttons </a>
                        </li>
                        <li>
                            <a href="user-interface-typography.html">
                                <span class="fa fa-text-width"></span> Typography </a>
                        </li>
                        <li>
                            <a href="user-interface-panels.html">
                                <span class="fa fa-archive"></span> Panels </a>
                        </li>
                        <li>
                            <a href="user-interface-progress-bars.html">
                                <span class="fa fa-bars"></span> Progress Bars </a>
                        </li>
                        <li>
                            <a href="user-interface-tabs.html">
                                <span class="fa fa-toggle-off"></span> Tabs </a>
                        </li>
                        <li>
                            <a href="user-interface-icons.html">
                                <span class="fa fa-hand-o-right"></span> Icons </a>
                        </li>
                        <li>
                            <a href="user-interface-grid.html">
                                <span class="fa fa-th-large"></span> Grid </a>
                        </li>
                        <li>
                            <a href="user-interface-progress-loader.html">
                                <span class="fa fa-th-large"></span> Page Progress Loader </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-tasks"></span>
                        <span class="sidebar-title">User Forms</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="user-forms-standart-inputs.html">
                                <span class="fa fa-magic"></span> Standart Inputs </a>
                        </li>
                        <li>
                            <a href="user-forms-additional-inputs.html">
                                <span class="fa fa-bell-o"></span> Additional Inputs
                            </a>
                        </li>
                        <li>
                            <a href="user-forms-editors.html">
                                <span class="fa fa-clipboard"></span> Editors </a>
                        </li>
                        <li>
                            <a href="user-forms-treeview.html">
                                <span class="fa fa-tree"></span> Treeview </a>
                        </li>
                        <li>
                            <a href="user-forms-nestable.html">
                                <span class="fa fa-tasks"></span> Nestable </a>
                        </li>
                        <li>
                            <a href="user-forms-image-tools.html">
                                <span class="fa fa-cloud-upload"></span> Image Tools
                            </a>
                        </li>
                        <li>
                            <a href="user-forms-file-uploaders.html">
                                <span class="fa fa-cloud-upload"></span> File Uploaders </a>
                        </li>
                        <li>
                            <a href="user-forms-notifications.html">
                                <span class="fa fa-bell-o"></span> Notifications </a>
                        </li>
                        <li>
                            <a href="user-forms-content-sliders.html">
                                <span class="fa fa-exchange"></span> Content Sliders </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-crop"></span>
                        <span class="sidebar-title">Plugins</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="glyphicon glyphicon-globe"></span> Maps
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="maps-basic.html">Basic</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">Vector</a>
                                </li>
                                <li>
                                    <a href="maps-full.html">Full</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="fa fa-area-chart"></span> Charts
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="charts-highcharts.html">Highcharts</a>
                                </li>
                                <li>
                                    <a href="charts-d3.html">D3 Charts</a>
                                </li>
                                <li>
                                    <a href="charts-flot.html">Flot Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="fa fa-table"></span> Tables
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="tables-basic.html"> Basic </a>
                                </li>
                                <li>
                                    <a href="tables-datatables.html"> Data </a>
                                </li>
                                <li>
                                    <a href="tables-sortable.html"> Sortable </a>
                                </li>
                                <li>
                                    <a href="tables-pricing.html"> Pricing </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-file-text-o"></span>
                        <span class="sidebar-title">Pages</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="fa fa-gears"></span> Utility
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="utility-confirmation.html" target="_blank"> Confirmation </a>
                                </li>
                                <li>
                                    <a href="utility-login.html" target="_blank"> Login </a>
                                </li>
                                <li>
                                    <a href="utility-register.html" target="_blank"> Register </a>
                                </li>
                                <li>
                                    <a href="utility-forgot-password.html" target="_blank"> Forgot Password </a>
                                </li>
                                <li>
                                    <a href="utility-coming-soon.html" target="_blank"> Coming Soon
                                    </a>
                                </li>
                                <li>
                                    <a href="utility-404-error.html"> 404 Error </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="fa fa-desktop"></span> Basic
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="basic-search-results.html">Search Results</a>
                                </li>
                                <li>
                                    <a href="basic-profile.html"> Profile </a>
                                </li>
                                <li>
                                    <a href="basic-timeline.html"> Timeline </a>
                                </li>
                                <li>
                                    <a href="basic-faq-page.html"> FAQ Page </a>
                                </li>
                                <li>
                                    <a href="basic-calendar.html"> Calendar </a>
                                </li>
                                <li>
                                    <a href="basic-messages.html"> Messages </a>
                                </li>
                                <li>
                                    <a href="basic-gallery.html"> Gallery </a>
                                </li>
                                <li>
                                    <a href="basic-invoice.html"> Invoice </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="doc/index.html">
                        <span class="fa fa-book"></span>
                        <span class="sidebar-title">Documentation</span>
                    </a>
                </li>

                <!-- -------------- Sidebar Progress Bars -------------- -->
                <li class="sidebar-label pt25 pb15">Stats</li>
                <li class="sidebar-stat">
                    <a href="#" class="fs11">
                        <span class="fa fa-calendar-o text-info"></span>
                        <span class="sidebar-title text-muted">September earnings</span>
                        <span class="pull-right mr20 text-muted">$1158</span>

                        <div id="high-column4" style="height: 150px;"></div>
                    </a>
                </li>
                <li class="sidebar-stat">
                    <a href="#" class="fs11">
                        <span class="fa fa-calendar text-info"></span>
                        <span class="sidebar-title text-muted">August earnings</span>
                        <span class="pull-right mr20 text-muted">$1001</span>

                        <div id="high-column5" style="height: 150px;"></div>
                    </a>
                </li>
            </ul>
            <!-- -------------- /Sidebar Menu  -------------- -->

            <!-- -------------- Sidebar Hide Button -------------- -->
            <div class="sidebar-toggler">
                <a href="#">
                    <span class="fa fa-arrow-circle-o-left"></span>
                </a>
            </div>
            <!-- -------------- /Sidebar Hide Button -------------- -->

        </div>
        <!-- -------------- /Sidebar Left Wrapper  -------------- -->

    </aside>
