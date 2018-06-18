@extends('frontend.front_view.front_master')
@section('page-title','View Each Order')
@section('main_content')
    <div class="container">
        <div class="dashboard-wrap">
            <!-- Navigation -->
            <nav class="dash-navigation-wrap">
                <ul>
                    <li class="active"><a  href="{{route('my-account',Auth::user()->id)}}">Dashboard</a></li>
                    <li><a href="{{route('customer-orders',Auth::user()->id)}}">orders</a></li>
                    <li><a href="{{route('customer-report',Auth::user()->id)}}">Report</a></li>
                    <li><a href="{{route('customer-accounting',Auth::user()->id)}}">Accounting</a></li>
                    <li><a href="{{route('customer-wallet',Auth::user()->id)}}">Wallet</a></li>
                    <li><a href="{{route('wishlist')}}">Wishlist</a></li>
                    <li><a href="{{route('customer-payment',Auth::user()->id)}}">Date &amp; Time Outstanding Payments</a></li>
                    <li><a href="{{route('customer-research',Auth::user()->id)}}">Supplier Research </a></li>
                    <li><a href="{{route('customer-review',Auth::user()->id)}}">Reviews & Ratings</a></li>
                    <li class="settings-menu"><a href="{{route('customer-personal-info',Auth::user()->id)}}">Personal Information</a></li>
                    <li class="settings-menu"><a href="{{route('customer-change-password',Auth::user()->id)}}">Change Password</a></li>

                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </nav><!-- Navigation -->
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <div class="dashboard-content-wrap">

                        <div class="tem" style="background: #fff3cd">
                            <div class="row" >
                                <div class="col-md-12">
                                    <div class="card" style="background: #0a95be">
                                        <div class="row text-center">
                                            <div class="col-md-6" style="color: #f0f0f0">
                                                <h2>R25n Technology</h2>
                                                <h4>Invoice #{{$order->id}}</h4>
                                                <h6>{{$order->created_at}}</h6>
                                            </div>
                                            <div class="col-md-6 text-center" style="color: #fff">
                                                Mobile: 0144855552<br/>
                                                Mail: r25n.office@gmail.com<br/>
                                                Website: www.r25n.com<br/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="text-center">Bill To</h2>
                                    <div class="jumbotron">
                                        <h4>{{$billing->bil_first_name.' '.$billing->bil_last_name}}</h4>
                                        <address>
                                            {{$billing->bil_address_1}}<br/>
                                            {{$billing->bil_address_2}}<br/>
                                            {{$billing->bil_phone}}<br/>
                                        </address>
                                        <strong>{{$billing->bil_city}}</strong>,<i>{{$billing->bil_state}}</i><br/>
                                        <u>{{$billing->bil_zipcode}}</u>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="text-center">Shipping Address</h2>
                                    <div class="jumbotron">
                                        <h4>{{$shipping->ship_first_name.' '.$shipping->ship_last_name}}</h4>
                                        <address>
                                            {{$shipping->ship_address_1}}<br/>
                                            {{$shipping->ship_address_2}}<br/>
                                            {{$shipping->ship_phone}}<br/>
                                        </address>
                                        <strong>{{$shipping->ship_city}}</strong>,<i>{{$shipping->ship_state}}</i><br/>
                                        <u>{{$shipping->ship_zip}}</u>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tr>

                                                    <th width="40%">Description</th>
                                                    <th width="20%">Unit Cost</th>
                                                    <th width="20%">Quantity</th>
                                                    <th width="20%">Amount</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($order_details as $single_product)
                                                    <tr>
                                                        <td>{{$single_product->product_name}}</td>
                                                        <td>{{$price = $single_product->product_price}}</td>
                                                        <td>{{$qty = $single_product->product_qty}}</td>
                                                        <td>{{$qty*$price}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="stat-widget-one">
                                                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                                <div class="stat-content dib">
                                                    <div class="stat-text">Order Total</div>
                                                    <div class="stat-digit">{{$order->order_total}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gap gap-small"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection