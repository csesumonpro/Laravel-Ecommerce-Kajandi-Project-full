@extends('frontend.front_view.front_master')
@section('page-title','Buyer Dashboard')
@section('main_content')



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

                    <div class="dashborad-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Graph</h1>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="#" class="btn btn-primary">ADD Work Place</a>
                            </div>
                        </div>
                    </div>

                    <h1>Here</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of DashBoard -->
<!-- End of Content Area -->

<div class="gap"></div>
    @endsection