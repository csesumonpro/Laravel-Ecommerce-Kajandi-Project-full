@extends('frontend.front_view.front_master')
@section('page-title','Customer Personal Information')
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

                        <div class="dashborad-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1>Personal Information</h1>
                                    <hr>
                                </div>
                                <div class="col-md-6 ">
                                    <a class="btn btn-primary" data-toggle="modal" href="#modal-id">Change Your Email Here</a>
                                    <div class="modal fade" id="modal-id">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                {!! Form::open(['url'=>'change-customer-email','method'=>'POST']) !!}
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                        &times;
                                                    </button>
                                                    <h4 class="modal-title">CHange Email</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <input class="form-control" type="email" name="email" value="{{Auth::user()->email}}">
                                                    @if ($errors->has('email'))
                                                        <div class="error">{{ $errors->first('email') }}</div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Update Email</button>
                                                </div>
                                                {!! Form::close() !!}
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                            </div>
                        </div>
                        <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                        <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                        <?php $customer = DB::table('customers')->where('cus_id',Auth::user()->id)->first();?>

                        <form id="updateProfile" action="{{route('update-personal-info')}}" method="post">
                            @csrf
                                <div class="row form-group">
                                    <label for="name" class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input  type="text" name="bil_first_name" value="{{$customer->bil_first_name}}" class="form-control" id="name" placeholder="Name">
                                        @if ($errors->has('bil_first_name'))
                                            <div class="error">{{ $errors->first('bil_first_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            <div class="row form-group">
                                <label for="name" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input  type="text" name="bil_last_name" value="{{$customer->bil_last_name}}" class="form-control" id="name" placeholder="Name">
                                    @if ($errors->has('bil_last_name'))
                                        <div class="error">{{ $errors->first('bil_last_name') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input  type="text" value="{{$customer->bil_phone}}" name="bil_phone" class="form-control" id="phone" placeholder="Phone">
                                    @if ($errors->has('bil_phone'))
                                        <div class="error">{{ $errors->first('bil_phone') }}</div>
                                    @endif
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Main Address</label>
                            <div class="col-sm-9">
                                <textarea name="bil_address_1" id="" cols="50" rows="4">
                                    {{$customer->bil_address_1}}
                                </textarea>
                                @if ($errors->has('bil_address_1'))
                                    <div class="error">{{ $errors->first('bil_address_1') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Address (Optional)</label>
                            <div class="col-sm-9">
                                <textarea name="bil_address_2" id="" cols="50" rows="4">
                                    {{$customer->bil_address_2}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                                <input  type="text" value="{{$customer->bil_city}}" name="bil_city" class="form-control" id="phone" placeholder="City">
                                @if ($errors->has('bil_city'))
                                    <div class="error">{{ $errors->first('bil_city') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label" >Country</label>
                            @if ($errors->has('bil_country'))
                                <div class="error">{{ $errors->first('bil_country') }}</div>
                            @endif
                            <select class="form-control gds-cr gds-countryflag" id="country" name="bil_country" country-data-region-id="gds-cr-three"
                                    country-data-default-value="{{$customer->bil_country}}"
                            >
                            </select>
                            <script>
                                jQuery('#vmap').vectorMap('set', 'selected, true, "{{$customer->bil_country}}")


                            </script>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Zip Code</label>
                            <div class="col-sm-9">
                                <input  type="text" value="{{$customer->bil_zipcode}}" name="bil_zipcode" class="form-control" id="phone" placeholder="City">
                                @if ($errors->has('bil_zipcode'))
                                    <div class="error">{{ $errors->first('bil_zipcode') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-edit"></i>   Update</button>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection