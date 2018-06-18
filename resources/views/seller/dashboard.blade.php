@extends('seller.seller_master')
@section('seller_content')
<!-- -------------- Main Wrapper -------------- -->
<section id="content_wrapper">

    <!-- -------------- Topbar Menu Wrapper -------------- -->
    <div id="topbar-dropmenu-wrapper">
        <div class="topbar-menu row">
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-danger">
                    <span class="fa fa-music"></span>
                    <span class="service-title">Audio</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-success">
                    <span class="fa fa-picture-o"></span>
                    <span class="service-title">Images</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-primary">
                    <span class="fa fa-video-camera"></span>
                    <span class="service-title">Videos</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-alert">
                    <span class="fa fa-envelope"></span>
                    <span class="service-title">Messages</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-system">
                    <span class="fa fa-cog"></span>
                    <span class="service-title">Settings</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="service-box bg-dark">
                    <span class="fa fa-user"></span>
                    <span class="service-title">Users</span>
                </a>
            </div>
        </div>
    </div>
    <!-- -------------- /Topbar Menu Wrapper -------------- -->

    <!-- -------------- Topbar -------------- -->
    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="dashboard1.html">
                        <span class="fa fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-active">
                    <a href="dashboard1.html">Dashboard</a>
                </li>
                <li class="breadcrumb-link">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-current-item">Dashboard</li>
            </ol>
        </div>
        <div class="topbar-right">
            <div class="ib topbar-dropdown">
                <label for="topbar-multiple" class="control-label">Reporting Period</label>
                <select id="topbar-multiple" class="hidden">
                    <optgroup label="Filter By:">
                        <option value="1-1">Last 30 Days</option>
                        <option value="1-2" selected="selected">Last 60 Days</option>
                        <option value="1-3">Last Year</option>
                    </optgroup>
                </select>
            </div>
            <div class="ml15 ib va-m" id="sidebar_right_toggle">
                <div class="navbar-btn btn-group btn-group-number mv0">
                    <button class="btn btn-sm btn-default btn-bordered prn pln">
                        <i class="fa fa-bar-chart fs22 text-default"></i>
                    </button>

                </div>
            </div>
        </div>
    </header>
    <!-- -------------- /Topbar -------------- -->

    <!-- -------------- Content -------------- -->
    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center">

            <!-- -------------- Quick Links -------------- -->
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="{{asset('public/seller')}}/assets/img/pages/clipart0.png"
                                                                class="img-responsive mauto" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h6 class="text-muted">TICKETS ANSWERED</h6>

                                    <h2 class="fs50 mt5 mbn">385</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="{{asset('public/seller')}}/assets/img/pages/clipart1.png"
                                                                class="img-responsive mauto" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h6 class="text-muted">PROJECTS LAUNCHED</h6>

                                    <h2 class="fs50 mt5 mbn">197</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="{{asset('public/seller')}}/assets/img/pages/clipart2.png"
                                                                class="img-responsive mauto" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h6 class="text-muted">HAPPY CUSTOMERS</h6>

                                    <h2 class="fs50 mt5 mbn">6789</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="{{asset('public/seller')}}/assets/img/pages/clipart3.png"
                                                                class="img-responsive mauto" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h6 class="text-muted">UNIQUE INNOVATIONS</h6>

                                    <h2 class="fs50 mt5 mbn">256</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- -------------- AllCP Info -------------- -->
            <div class="allcp-panels fade-onload">

                <div class="row">

                    <!-- -------------- AllCP Grid -------------- -->
                    <div class="col-md-12 allcp-grid">

                        <!-- -------------- Perfomance -------------- -->
                        <div class="panel mbn" data-panel-title="false">
                            <div class=" text-dark pl25 fw700 fs35">
                                Perfomance
                            </div>
                            <div class="panel-body pn">
                                <div class="row">
                                    <!-- -------------- Chart -------------- -->
                                    <div class="col-md-9 mb10">
                                        <div id="high-area"
                                             style="width: 100%; height: 350px; margin: 0 auto"></div>
                                    </div>

                                    <!-- -------------- Text -------------- -->
                                    <div class="col-md-3">
                                        <div class="mb20">
                                            <div class="text-dark fw700">January - March:</div>
                                            Nunc luctus dui quis ligula placerat feugiat.
                                        </div>

                                        <div class="mb20">
                                            <div class="text-dark fw700">April - June:</div>
                                            Curabitur convallis lacus urna, eu ultrices mauris luctus nec libero
                                            dui, porttitor sit amet.
                                        </div>

                                        <div class="mb20">
                                            <div class="text-dark fw700">Jule - September:</div>
                                            Nullam quis turpis a nisl pulvinar dignissim.
                                        </div>

                                        <div class="mb20">
                                            <div class="text-dark fw700">October - December</div>
                                            Nunc eget consectetur tellus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -------------- /AllCP Grid -------------- -->

                    <div class="col-xs-12 allcp-grid hidden-xs">

                        <!-- -------------- Widget Calendar -------------- -->
                        <div class="panel mbn">
                            <div class="text-dark pl25 fw700 fs35">
                                Monthly Events: 2015
                            </div>
                            <div class="panel-body">
                                <div id="calendar" class="events-calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">

                        <!-- -------------- Poll -------------- -->
                        <div class="panel" id="spy1">
                            <div class="panel-heading">
                                <span class="panel-title">Poll</span>
                            </div>
                            <div class="panel-body p20 br-a br6">

                                <div id="donut-chart1" style="height: 350px; width: 100%;"></div>

                            </div>
                            <div class="panel-body">
                                <div class="radio-custom mb5 radio-danger">
                                    <input type="radio" id="browser1" name="radioExample">
                                    <label for="browser1">Option 1: Google Chrome</label>
                                </div>
                                <div class="radio-custom mb5 radio-success">
                                    <input type="radio" id="browser2" name="radioExample">
                                    <label for="browser2">Option 2: Mozilla FireFox</label>
                                </div>
                                <div class="radio-custom mb5 radio-primary">
                                    <input type="radio" id="browser3" name="radioExample">
                                    <label for="browser3">Option 3: Microsoft IE</label>
                                </div>
                                <div class="mt20">
                                    <div class="btn btn-primary btn-lg mr20 mb5">VOTE</div>
                                    <div class="btn btn-default btn-lg mb5">Hide result</div>
                                </div>
                            </div>

                        </div>

                        <!-- -------------- Task-list -------------- -->
                        <div class="panel panel-widget task-widget sort-disable" id="spy11">
                            <div class="panel-heading cursor">
                                <span class="panel-title"> Task-List Widget</span>
                            </div>
                            <div class="panel-body pn br-t">

                                <h6 class="fs14 mv20"><i class="fa fa-bell text-alert mr15"></i><span
                                        class="text-muted">PERSONAL TASKS</span></h6>
                                <ul class="task-list task-current mb40">
                                    <li class="task-item success">
                                        <div class="task-handle">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" id="task0">
                                                <label for="task0"></label>
                                            </div>
                                        </div>
                                        <div class="task-desc">Remove announcement</div>
                                        <div class="task-menu"></div>
                                    </li>
                                    <li class="task-item danger">
                                        <div class="task-handle">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" id="task1">
                                                <label for="task1"></label>
                                            </div>
                                        </div>
                                        <div class="task-desc">Post an announcement</div>
                                        <div class="task-menu"></div>
                                    </li>
                                    <li class="task-item primary">
                                        <div class="task-handle">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" id="task2">
                                                <label for="task2"></label>
                                            </div>
                                        </div>
                                        <div class="task-desc">Add new products</div>
                                        <div class="task-menu"></div>
                                    </li>
                                    <li class="task-item info">
                                        <div class="task-handle">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" id="task3">
                                                <label for="task3"></label>
                                            </div>
                                        </div>
                                        <div class="task-desc">Ban a few users</div>
                                        <div class="task-menu"></div>
                                    </li>
                                    <li class="task-item warning">
                                        <div class="task-handle">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" id="task4">
                                                <label for="task4"></label>
                                            </div>
                                        </div>
                                        <div class="task-desc">Clean comments</div>
                                        <div class="task-menu"></div>
                                    </li>
                                </ul>

                                <h6 class="fs14 mb20"><i class="fa fa-check-square-o text-success mr15"></i><span
                                        class="text-muted">COMPLETE TASKS</span></h6>
                                <ul class="task-list task-completed">
                                    <li class="task-item danger item-checked">
                                        <div class="task-handle">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" checked="" id="task7">
                                                <label for="task7"></label>
                                            </div>
                                        </div>
                                        <div class="task-desc">Add article review</div>
                                        <div class="task-menu"></div>
                                    </li>
                                    <li class="task-item system item-checked">
                                        <div class="task-handle">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" checked="" id="task8">
                                                <label for="task8"></label>
                                            </div>
                                        </div>
                                        <div class="task-desc">Add iPad review</div>
                                        <div class="task-menu"></div>
                                    </li>
                                    <li class="task-item item-alert item-checked">
                                        <div class="task-handle">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" checked="" id="task9">
                                                <label for="task9"></label>
                                            </div>
                                        </div>
                                        <div class="task-desc">Ban THATuser user</div>
                                        <div class="task-menu"></div>
                                    </li>
                                    <li class="task-item info item-checked">
                                        <div class="task-handle">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" checked="" id="task10">
                                                <label for="task10"></label>
                                            </div>
                                        </div>
                                        <div class="task-desc">Create new pages</div>
                                        <div class="task-menu"></div>
                                    </li>
                                    <li class="task-item info item-checked">
                                        <div class="task-handle">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" checked="" id="task11">
                                                <label for="task10"></label>
                                            </div>
                                        </div>
                                        <div class="task-desc">Remove old pages</div>
                                        <div class="task-menu"></div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <!-- -------------- Crawler-list -------------- -->
                        <div class="panel" id="spy2">
                            <div class="panel-heading">
                                <span class="panel-title">Crawler List</span>
                            </div>
                            <div class="panel-body panel-scroller scroller-primary scroller-md scroller-pn pn">
                                <table class="table mbn tc-icon-bold br-t">
                                    <thead>
                                    <tr class="hidden">
                                        <th>#</th>
                                        <th>First Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm google va-t mr10"></span>Google Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm bing va-t mr10"></span>Bing Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm yahoo va-t mr10"></span>Yahoo Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm google va-t mr10"></span>Google Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm bing va-t mr10"></span>Bing Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm yahoo va-t mr10"></span>Yahoo Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm google va-t mr10"></span>Google Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm bing va-t mr10"></span>Bing Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm yahoo va-t mr10"></span>Yahoo Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm google va-t mr10"></span>Google Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm bing va-t mr10"></span>Bing Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm yahoo va-t mr10"></span>Yahoo Bot
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- -------------- Browser-list -------------- -->
                        <div class="panel" id="spy3">
                            <div class="panel-heading">
                                <span class="panel-title">Browser List</span>
                            </div>
                            <div class="panel-body panel-scroller scroller-md scroller-primary scroller-pn pn">
                                <table class="table mbn tc-icon-bold br-t">
                                    <thead>
                                    <tr class="hidden">
                                        <th>#</th>
                                        <th>First Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm chrome va-t mr10"></span>Chrome
                                        </td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm firefox va-t mr10"></span>Firefox
                                        </td>
                                        <td>25%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm ie va-t mr10"></span>Internet Explorer
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm safari va-t mr10"></span>Safari
                                        </td>
                                        <td>5%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm chrome va-t mr10"></span>Chrome
                                        </td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm firefox va-t mr10"></span>Firefox
                                        </td>
                                        <td>25%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm ie va-t mr10"></span>Internet Explorer
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm safari va-t mr10"></span>Safari
                                        </td>
                                        <td>5%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm chrome va-t mr10"></span>Chrome
                                        </td>
                                        <td>50%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm firefox va-t mr10"></span>Firefox
                                        </td>
                                        <td>25%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm ie va-t mr10"></span>Internet Explorer
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="favicons-sm safari va-t mr10"></span>Safari
                                        </td>
                                        <td>5%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- -------------- Visitors Graph -------------- -->
                        <div class="panel" id="spy4">
                            <div class="panel-heading">
                                <span class="panel-title">Visitors Graph Widget</span>
                            </div>
                            <div class="panel-body pn">
                                <table class="table mbn tc-icon-bold br-t">
                                    <tbody>
                                    <tr>
                                        <td class="va-m fw600 text-muted">
                                            <span class="fa fa-circle text-success fs14 mr10"></span>Google
                                        </td>
                                        <td class="fs15 fw600 text-right">45%</td>
                                    </tr>
                                    <tr>
                                        <td class="va-m fw600 text-muted">
                                            <span class="fa fa-circle text-warning fs14 mr10"></span>Bing
                                        </td>
                                        <td class="fs15 fw600 text-right">33%</td>
                                    </tr>
                                    <tr>
                                        <td class="va-m fw600 text-muted">
                                            <span class="fa fa-circle text-primary fs14 mr10"></span>Twitter
                                        </td>
                                        <td class="fs15 fw600 text-right">18%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="panel-body">
                                <div id="high-area2" style="height: 200px; width: 100%;"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <!-- -------------- Server Status -------------- -->
                        <div class="panel" id="spy5">
                            <div class="panel-heading">
                                <span class="panel-title">Server Status</span>
                            </div>
                            <div class="panel-body pn">
                                <div class="progress progress-bar-xl br4">
                                    <div class="progress-bar progress-bar-system" role="progressbar"
                                         aria-valuenow="55"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                        <span class="pull-left ph10">Memory Used</span>
                                        <span class="pull-right ph10">55%</span>
                                    </div>
                                </div>
                                <div class="progress progress-bar-xl br4">
                                    <div class="progress-bar progress-bar-system" role="progressbar"
                                         aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="pull-left ph10">Disk dev/sda1</span>
                                        <span class="pull-right ph10">60%</span>
                                    </div>
                                </div>
                                <div class="progress progress-bar-xl br4">
                                    <div class="progress-bar progress-bar-system" role="progressbar"
                                         aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                        <span class="pull-left ph10">Disk dev/sda2</span>
                                        <span class="pull-right ph10">80%</span>
                                    </div>
                                </div>
                                <div class="progress progress-bar-xl br4">
                                    <div class="progress-bar progress-bar-system" role="progressbar"
                                         aria-valuenow="66"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                        <span class="pull-left ph10">Disk dev/sda3</span>
                                        <span class="pull-right ph10">66%</span>
                                    </div>
                                </div>
                                <div class="progress progress-bar-xl br4">
                                    <div class="progress-bar progress-bar-system" role="progressbar"
                                         aria-valuenow="45"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                        <span class="pull-left ph10">Disk dev/sda4</span>
                                        <span class="pull-right ph10">45%</span>
                                    </div>
                                </div>
                                <div class="progress progress-bar-xl br4">
                                    <div class="progress-bar progress-bar-system" role="progressbar"
                                         aria-valuenow="78"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                        <span class="pull-left ph10">Disk dev/sda5</span>
                                        <span class="pull-right ph10">78%</span>
                                    </div>
                                </div>

                                <p class="">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                    molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>

                            </div>
                        </div>

                        <!-- -------------- User Project List -------------- -->
                        <div class="panel" id="spy6">
                            <div class="panel-heading">
                                <span class="panel-title">User Project List</span>
                            </div>
                            <div class="panel-body pn">
                                <div class="bs-component">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead class="bg-primary br6">
                                            <tr class="br6">
                                                <th class="br-t-l-r6 br-b-n lh25 pl30">SCHEDULE</th>
                                                <th class="br-b-n"></th>
                                                <th class="br-b-n"></th>
                                                <th class="br-t-r-r6 br-b-n"></th>
                                            </tr>
                                            </thead>
                                            <thead class="bg-dark">
                                            <tr>
                                                <th class="br-t-n pl30">Project</th>
                                                <th class="br-t-n hidden-xs">Start Date</th>
                                                <th class="br-t-n">Deadline</th>
                                                <th class="br-t-n">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="pl30">#4551</td>
                                                <td class="hidden-xs">Oct 10, 2014</td>
                                                <td>Oct 10, 2015</td>
                                                <td><span class="label label-success ml5">Done</span></td>
                                            </tr>
                                            <tr>
                                                <td class="pl30">#4532</td>
                                                <td class="hidden-xs">Oct 10, 2013</td>
                                                <td>Oct 10, 2014</td>
                                                <td><span class="label label-danger ml5">Failed</span></td>
                                            </tr>
                                            <tr>
                                                <td class="pl30">#4853</td>
                                                <td class="hidden-xs">Oct 10, 2015</td>
                                                <td>Oct 10, 2016</td>
                                                <td><span class="label label-primary ml5">In Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td class="pl30">#5564</td>
                                                <td class="hidden-xs">Oct 10, 2014</td>
                                                <td>Oct 10, 2015</td>
                                                <td><span class="label label-success ml5">Done</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- -------------- Traphic Sources -------------- -->
                        <div class="panel" id="spy7">
                            <div class="panel-heading">
                                <span class="panel-title">Traphic Sources</span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-4 text-center p5">
                                        <div class="info-circle  va-m" id="c1" value="55"
                                             data-circle-color="primary"></div>
                                        <div class="text-dark fw600">Google</div>
                                    </div>
                                    <div class="col-sm-4 text-center p5">
                                        <div class="info-circle" id="c2" value="15"
                                             data-circle-color="primary"></div>
                                        <div class="text-dark fw600">Bing</div>
                                    </div>
                                    <div class="col-sm-4 text-center p5">
                                        <div class="info-circle" id="c3" value="30"
                                             data-circle-color="primary"></div>
                                        <div class="text-dark fw600">Twitter</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- -------------- Country List -------------- -->
                        <div class="panel" id="spy8">
                            <div class="panel-heading">
                                <span class="panel-title">Country List</span>
                            </div>
                            <div class="panel-body panel-scroller scroller-md scroller-pn pn">
                                <table class="table mbn tc-icon-bold br-t">
                                    <thead>
                                    <tr class="hidden">
                                        <th>#</th>
                                        <th>First Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-mx mr5 va-b"></span>Mexico
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-gb mr5 va-b"></span> Great Britain
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-ca mr5 va-b"></span>Canada
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-us mr5 va-b"></span>United States
                                        </td>
                                        <td>31%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-cn mr5 va-b"></span> China
                                        </td>
                                        <td>22%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-mx mr5 va-b"></span>Mexico
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-gb mr5 va-b"></span> Great Britain
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-ca mr5 va-b"></span>Canada
                                        </td>
                                        <td>33%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-us mr5 va-b"></span>United States
                                        </td>
                                        <td>31%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-cn mr5 va-b"></span> China
                                        </td>
                                        <td>22%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-us mr5 va-b"></span>United States
                                        </td>
                                        <td>31%</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="flag-sm flag-cn mr5 va-b"></span> China
                                        </td>
                                        <td>22%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- -------------- Traphic Sources -------------- -->
                        <div class="panel" id="spy9">
                            <div class="panel-heading">
                                <span class="panel-title">Traphic Sources</span>
                            </div>
                            <div class="panel-body pn">
                                <div class="row table-layout table-clear-sm">
                                    <div class="col-md-6 va-m pn pr20 pt10">
                                        <div class="progress progress-bar-xl mt50 mb35">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="55"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                                <span>Google</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-bar-xl mb35">
                                            <div class="progress-bar progress-bar-info" role="progressbar"
                                                 aria-valuenow="15"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
                                                <span>Bing</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-bar-xl">
                                            <div class="progress-bar progress-bar-alert" role="progressbar"
                                                 aria-valuenow="30"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                                <span>Twitter</span>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6 pn">
                                        <div class="allcp-form">
                                            <!-- -------------- Block Widget -------------- -->
                                            <div class="smart-widget sm-right smr-50">
                                                <label class="field">
                                                    <input type="text" name="sub" id="sub"
                                                           class="gui-input br-n br-b"
                                                           placeholder="Add Data Source">
                                                </label>
                                                <button type="submit" class="button br-n br-b br-l">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <table class="table mbn tc-icon-bold">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-circle text-warning fs14 mr10"></span>Google
                                                </td>
                                                <td>55%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-circle text-info fs14 mr10"></span>Bing
                                                </td>
                                                <td>15%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-circle text-alert fs14 mr10"></span>Twitter
                                                </td>
                                                <td>30%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- -------------- Visitor Geography -------------- -->
                        <div class="panel" id="spy10">
                            <div class="panel-heading">
                                <span class="panel-title">Visitor Geography</span>
                            </div>
                            <div class="panel-body">
                                <div id="WidgetMap" class="jvector-colors hide-jzoom"
                                     style="width: 100%; height: 220px;"></div>
                            </div>
                            <div class="panel-menu allcp-form pn br-t">
                                <!-- -------------- Block Widget -------------- -->
                                <div class="smart-widget sm-right smr-50">
                                    <label class="field">
                                        <input type="text" name="sub1" id="sub1" class="gui-input br-n"
                                               placeholder="United States of America" disabled>
                                    </label>
                                    <button type="submit" class="button br-n br-l">
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="panel-body pn">
                                <table class="table mbn tc-icon-bold br-t">
                                    <tbody>
                                    <tr>
                                        <td class="va-m fw600 text-muted">
                                            <span class="fa fa-circle text-success fs14 mr10"></span>California
                                        </td>
                                        <td class="fs15 fw600 text-right">45%</td>
                                    </tr>
                                    <tr>
                                        <td class="va-m fw600 text-muted">
                                            <span class="fa fa-circle text-warning fs14 mr10"></span>Texas
                                        </td>
                                        <td class="fs15 fw600 text-right">33%</td>
                                    </tr>
                                    <tr>
                                        <td class="va-m fw600 text-muted">
                                            <span class="fa fa-circle text-primary fs14 mr10"></span>Florida
                                        </td>
                                        <td class="fs15 fw600 text-right">18%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- -------------- /.col-md-6 -------------- -->


                </div>


            </div>


        </div>
        <!-- -------------- /Column Center -------------- -->

        <!-- -------------- Column Right -------------- -->
        <aside class="chute chute-right chute270 pn hidden" data-chute-height="match">

            <!-- -------------- Activity Timeline -------------- -->
            <ol class="timeline-list pl5 mt5">
                <li class="timeline-item">
                    <div class="timeline-icon bg-dark light">
                        <span class="fa fa-tags"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Genry</b> Added a new item to his store:
                        <a href="#">Ipod</a>
                    </div>
                    <div class="timeline-date">1:25am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-dark light">
                        <span class="fa fa-tags"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Lion</b> Added a new item to his store:
                        <a href="#">Notebook</a>
                    </div>
                    <div class="timeline-date">3:05am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-success">
                        <span class="fa fa-usd"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Admin</b> created a new invoice for:
                        <a href="#">Software</a>
                    </div>
                    <div class="timeline-date">4:15am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-warning">
                        <span class="fa fa-pencil"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Laura</b> edited her work experience
                    </div>
                    <div class="timeline-date">5:25am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-success">
                        <span class="fa fa-usd"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Admin</b> created a new invoice for:
                        <a href="#">Apple Inc.</a>
                    </div>
                    <div class="timeline-date">7:45am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-dark light">
                        <span class="fa fa-tags"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Genry</b> Added a new item to his store:
                        <a href="#">Ipod</a>
                    </div>
                    <div class="timeline-date">8:25am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-dark light">
                        <span class="fa fa-tags"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Lion</b> Added a new item to his store:
                        <a href="#">Watch</a>
                    </div>
                    <div class="timeline-date">9:35am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-system">
                        <span class="fa fa-fire"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Admin</b> created a new invoice for:
                        <a href="#">Software</a>
                    </div>
                    <div class="timeline-date">4:15am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-warning">
                        <span class="fa fa-pencil"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Laura</b> edited her work experience
                    </div>
                    <div class="timeline-date">5:25am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-success">
                        <span class="fa fa-usd"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Admin</b> created a new invoice for:
                        <a href="#">Software</a>
                    </div>
                    <div class="timeline-date">4:15am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-warning">
                        <span class="fa fa-pencil"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Laura</b> edited her work experience
                    </div>
                    <div class="timeline-date">5:25am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-success">
                        <span class="fa fa-usd"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Admin</b> created a new invoice for:
                        <a href="#">Apple Inc.</a>
                    </div>
                    <div class="timeline-date">7:45am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-dark light">
                        <span class="fa fa-tags"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Genry</b> Added a new item to his store:
                        <a href="#">Ipod</a>
                    </div>
                    <div class="timeline-date">8:25am</div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-icon bg-dark light">
                        <span class="fa fa-tags"></span>
                    </div>
                    <div class="timeline-desc">
                        <b>Lion</b> Added a new item to his store:
                        <a href="#">Watch</a>
                    </div>
                    <div class="timeline-date">9:35am</div>
                </li>
            </ol>

        </aside>
        <!-- -------------- /Column Right -------------- -->

    </section>
    <!-- -------------- /Content -------------- -->

    <!-- -------------- Page Footer -------------- -->
    <footer id="content-footer" class="affix">
        <div class="row">
            <div class="col-md-6">
                <span class="footer-legal">© 2015 All rights reserved. <a href="#">Therms of use</a> and <a
                        href="#">Privacy policy</a></span>
            </div>
            <div class="col-md-6 text-right">
                <span class="footer-meta"></span>
                <a href="#content" class="footer-return-top">
                    <span class="fa fa-angle-up"></span>
                </a>
            </div>
        </div>
    </footer>
    <!-- -------------- /Page Footer -------------- -->

</section>
<!-- -------------- /Main Wrapper -------------- -->

<!-- -------------- Sidebar Right -------------- -->
<aside id="sidebar_right" class="nano affix">

    <!-- -------------- Sidebar Right Content -------------- -->
    <div class="sidebar-right-wrapper nano-content">

        <div class="sidebar-block br-n p15">

            <h6 class="title-divider text-muted mb20"> Visitors Stats
            <span class="pull-right"> 2015
              <i class="fa fa-caret-down ml5"></i>
            </span>
            </h6>

            <div class="progress mh5">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="34"
                     aria-valuemin="0"
                     aria-valuemax="100" style="width: 34%">
                    <span class="fs11">New visitors</span>
                </div>
            </div>
            <div class="progress mh5">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="66"
                     aria-valuemin="0"
                     aria-valuemax="100" style="width: 66%">
                    <span class="fs11 text-left">Returnig visitors</span>
                </div>
            </div>
            <div class="progress mh5">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45"
                     aria-valuemin="0"
                     aria-valuemax="100" style="width: 45%">
                    <span class="fs11 text-left">Orders</span>
                </div>
            </div>

            <h6 class="title-divider text-muted mt30 mb10">New visitors</h6>

            <div class="row">
                <div class="col-xs-5">
                    <h3 class="text-primary mn pl5">350</h3>
                </div>
                <div class="col-xs-7 text-right">
                    <h3 class="text-warning mn">
                        <i class="fa fa-caret-down"></i> 15.7% </h3>
                </div>
            </div>

            <h6 class="title-divider text-muted mt25 mb10">Returnig visitors</h6>

            <div class="row">
                <div class="col-xs-5">
                    <h3 class="text-primary mn pl5">660</h3>
                </div>
                <div class="col-xs-7 text-right">
                    <h3 class="text-success-dark mn">
                        <i class="fa fa-caret-up"></i> 20.2% </h3>
                </div>
            </div>

            <h6 class="title-divider text-muted mt25 mb10">Orders</h6>

            <div class="row">
                <div class="col-xs-5">
                    <h3 class="text-primary mn pl5">153</h3>
                </div>
                <div class="col-xs-7 text-right">
                    <h3 class="text-success mn">
                        <i class="fa fa-caret-up"></i> 5.3% </h3>
                </div>
            </div>
@endsection
