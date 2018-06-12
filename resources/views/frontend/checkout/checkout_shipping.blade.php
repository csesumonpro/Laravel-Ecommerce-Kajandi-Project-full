@extends('frontend.front_view.front_master')
@section('page-title','Shipping')
@section('main_content')

<!-- checkout start -->

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="billing-detail">
                    <div class="section-title">
                        <h4 class="text-uppercase mb-35">Shipping detail</h4>
                    </div>
                    {!! Form::open(['method'=>'POST','url'=>'save-shipping']) !!}
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" name="ship_first_name" required="" id="firstname">
                                    @if ($errors->has('ship_first_name'))
                                        <div class="error">{{ $errors->first('ship_first_name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" required="" class="form-control" name="ship_last_name" id="lastname">
                                    @if ($errors->has('ship_last_name'))
                                        <div class="error">{{ $errors->first('ship_last_name') }}</div>
                                    @endif
                                </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input class="form-control" type="email" required="" name="ship_email" id="email">
                                @if ($errors->has('ship_email'))
                                    <div class="error">{{ $errors->first('ship_email') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" required="" id="address" name="ship_address_1" class="form-control">
                                @if ($errors->has('ship_address_1'))
                                    <div class="error">{{ $errors->first('ship_address_1') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="address">Address - 2(Optional)</label>
                              <input type="text" name="ship_address_2" id="address" class="form-control">
                            </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" required="" id="city" name="ship_city" class="form-control">
                                    @if ($errors->has('ship_city'))
                                        <div class="error">{{ $errors->first('ship_city') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input class="form-control" id="state" type="text" placeholder="State" name="ship_state">
                                    @if ($errors->has('ship_state'))
                                        <div class="error">{{ $errors->first('ship_state') }}</div>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="zip">Zip/Postal Code</label>
                                    <input type="text" class="form-control" required="" name="ship_zip" id="zip">
                                    @if ($errors->has('ship_zip'))
                                        <div class="error">{{ $errors->first('ship_zip') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    @if ($errors->has('ship_country'))
                                        <div class="error">{{ $errors->first('ship_country') }}</div>
                                    @endif
                                    <select class="form-control gds-cr gds-countryflag" name="ship_country" country-data-region-id="gds-cr-three" ></select>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" required="" class="form-control" name="ship_phone" id="phone">
                                    @if ($errors->has('ship_phone'))
                                        <div class="error">{{ $errors->first('ship_phone') }}</div>
                                    @endif
                                </div>

                                <input class="btn btn-primary text-right" type="submit" value="NEXT" />
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-2"></div>

        </div>
        <div class="gap gap-small"></div>
    </div>

<!-- checkout end -->
@stop
