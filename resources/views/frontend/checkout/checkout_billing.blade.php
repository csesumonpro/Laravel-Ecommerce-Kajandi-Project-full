@extends('frontend.front_view.front_master')
@section('page-title','Billing Address')
@section('main_content')

    <!-- checkout start -->

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="billing-detail">
                    <div class="section-title">
                        <h4 class="text-uppercase mb-35">Billing detail</h4>
                    </div>
                    {!! Form::open(['method'=>'POST','url'=>'save-billing']) !!}
                        <div class="form-group">
                            <label for="">Country</label>
                            @if ($errors->has('bil_country'))
                                <div class="error">{{ $errors->first('bil_country') }}</div>
                            @endif
                            <select class="form-control gds-cr gds-countryflag" name="bil_country" country-data-region-id="gds-cr-three" ></select>
                        </div>


                        <div class="form-group">
                            <label for="first_name"> First Name</label>
                                <input type="text" id="first_name" class="form-control" placeholder="First name" name="bil_first_name">
                            @if ($errors->has('bil_first_name'))
                                <div class="error">{{ $errors->first('bil_first_name') }}</div>
                                @endif
                        </div>
                            <div class="form-group">
                                <label for="last_name"> Last Name</label>
                                <input type="text" class="form-control" id="last_name" placeholder="Last name" name="bil_last_name">
                            @if ($errors->has('bil_last_name'))
                                <div class="error">{{ $errors->first('bil_last_name') }}</div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="email"> Email Address</label>
                                <input type="text" class="form-control" value="" name="bil_email" id="email">
                            @if ($errors->has('bil_email'))
                                <div class="error">{{ $errors->first('bil_email') }}</div>
                                @endif
                            </div>

                                <div class="form-group">
                                    <label for="phone"> Phone No.</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Phone no." name="bil_phone">
                                @if ($errors->has('bil_phone'))
                                    <div class="error">{{ $errors->first('bil_phone') }}</div>
                                    @endif
                                </div>
                        <div class="from-group">
                            <label for="address">Address</label>
                                <input id="address" class="form-control" type="text" placeholder="Address line 1" name="bil_address_1">
                            @if ($errors->has('bil_address_1'))
                                <div class="error">{{ $errors->first('bil_address_1') }}</div>
                            @endif
                        </div>
                        <input type="text" class="form-control" placeholder="Address line 2" name="bil_address_2">
                        <div class="from-group">
                            <label for="city">Town/City</label>
                                <input type="text" id="city" class="form-control" placeholder="Town/City" name="bil_city">
                            @if ($errors->has('bil_city'))
                                <div class="error">{{ $errors->first('bil_city') }}</div>
                                @endif
                        </div>


                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" id="state" class="form-control" placeholder="State" name="bil_state">
                            </div>
                            <div class="form-group">
                                <label for="zip">Zip Code</label>
                                <input type="text" id="zip" class="form-control" placeholder="Zip Code" name="bil_zipcode">
                            @if ($errors->has('bil_zipcode'))
                                <div class="error">{{ $errors->first('bil_zipcode') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="radio" checked="checked" value="0" name="shipping_address">Ship to this address
                                </label>
                                <label>
                                    <input type="radio" id="add-new-address" value="1" name="shipping_address">Ship to different address
                                </label>
                                <label for="bil">
                                    <input class="btn btn-primary text-right" id="bil" type="submit" value="NEXT" />
                                </label>
                            </div>
                            {{--Cut shipping info in this section--}}
                   {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-2"></div>

    </div>
    <div class="gap gap-small"></div>
    </div>
@stop
