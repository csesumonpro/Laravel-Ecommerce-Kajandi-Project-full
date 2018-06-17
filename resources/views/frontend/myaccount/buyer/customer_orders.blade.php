@extends('frontend.front_view.front_master')
@section('page-title','Customer Order')
@section('main_content')
{{--@foreach($orders as $order)--}}
    {{--{{$order->payment_status}}--}}
    {{--@endforeach--}}
    <!-- DashBoard -->
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
                <li><a href="{{route('customer-research',Auth::user()->id)}}">Reviews & Ratings</a></li>
                <li class="settings-menu"><a href="">Personal Information</a></li>
                <li class="settings-menu"><a href="">Change Password</a></li>

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

                    <div class="dashborad-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Orders</h1>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="#" class="btn btn-primary">ADD Work Place</a>
                            </div>
                        </div>
                    </div>

                    <table class="table table table-shopping-cart dash-order-table">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Order Number</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Payment Status</th>
                            <th>Work Place</th>
                            <th>Dalivery Status</th>
                            <th>View</th>
                        </tr>
                        </thead>
                        <tbody>
                       @if(Auth::check())
                        <?php $i =0;?>
                        @foreach($orders as $order)
                            <?php $i++; ?>
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$order->id}}</td>
                            <td>{{$order->total_qty}}</td>
                            <td>${{$order->order_total}}</td>
                            @if($order->payment_status=='pending')
                            <td class="alert-warning text-uppercase">{{$order->payment_status}}</td>
                            @elseif($order->payment_status=='paid')
                            <td class="alert-success text-uppercase">{{$order->payment_status}}</td>
                           @endif
                            <td>
                                <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                </select>
                            </td>
                            <td>
                                @if($order->order_status=='pending')
                                <div class="p-status alert-warning text-uppercase">{{$order->order_status}}</div>
                                @elseif($order->order_status='confirm')
                                <div class="p-status alert-success text-uppercase">{{$order->order_status}}</div>
                                @endif
                            </td>
                            <td><a href="{{route('view-each-order',$order->id)}}" class="btn btn-primary">View</a></td>
                        </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of DashBoard -->
<!-- End of Content Area -->

<div class="gap"></div>
@endsection