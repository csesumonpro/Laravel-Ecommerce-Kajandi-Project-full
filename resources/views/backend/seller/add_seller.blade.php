@extends('backend.admin_master')
@section('page_title','Add Vendor/Seller')
@section('admin_content')
<link rel="stylesheet" href="{{asset('public/backend/countryflag/geodatasource-countryflag.css')}}">

<div class="col-md-10 offset-1">
    <div class="card">
        <div class="card-header"><h4>Add Vendor/Seller</h4>
            <small>
                <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
            </small>
        </div>
        <form action="{{route('storeVendor')}}" method="post">
          @csrf
          <input type="hidden" name="admin_id" value="{{Auth::guard('admin')->user()->id}}">
        <div class="card">
          <div class="card-header">
            <strong>General Information</strong>
          </div>
          <div class="card-body">

                <div class="card-body card-block">

                    <div class="form-group">
                        <label for="company" class=" form-control-label">Vendor/Seller Name</label>
                        <input type="text" id="company" name="vendorname"  class="form-control" placeholder="Enter Vendor/Seller Name">
                        @if ($errors->has('vendorname'))
                            <div class="error">{{ $errors->first('vendorname') }}</div>
                        @endif
                    </div>
                    <div class="row">
                      <div class="col-md-4 form-group">
                        <label for="company" class=" form-control-label">Vendor/Seller Type</label>
                        <select class="form-control" name="vendor_type">
                          <option value="" option="selected">Select Vendor Type</option>
                          <option value="1">Retailer</option>
                          <option value="2">Distributor</option>
                          <option value="2">OEM</option>
                          <option value="3">None</option>
                        </select>
                        @if ($errors->has('vendor_type'))
                            <div class="error">{{ $errors->first('vendor_type') }}</div>
                        @endif
                      </div>
                      <div class="col-md-4 form-group">
                        <label for="producttype" class="form-control-label">Type of Product</label>
                        <select class="form-control" name="producttype">
                          <option value="" option="selected">Select Product Type</option>
                          <option value="1">Goods</option>
                          <option value="2">Service</option>
                        </select>
                        @if ($errors->has('producttype'))
                            <div class="error">{{ $errors->first('producttype') }}</div>
                        @endif
                      </div>
                      <div class="col-md-4 form-group">
                        <label for="location" class="form-control-label">Location</label>
                        <select class="form-control" name="location">
                          <option value="" option="selected">Select Location</option>
                          <option value="1">Foreign</option>
                          <option value="2">Local</option>
                        </select>
                        @if ($errors->has('location'))
                            <div class="error">{{ $errors->first('location') }}</div>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class=" form-control-label">Address</label>
                        <input type="text" id="address" name="address"  class="form-control" placeholder="Enter address">
                        @if ($errors->has('name'))
                            <div class="error">{{ $errors->first('address') }}</div>
                        @endif
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="country" class=" form-control-label">Country</label>
                         <select class="form-control gds-cr gds-countryflag" name="country" country-data-region-id="gds-cr-three" ></select>



                        @if ($errors->has('country'))
                            <div class="error">{{ $errors->first('country') }}</div>
                        @endif
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="email" class=" form-control-label">Email</label>
                        <input type="email" id="email" name="email"  class="form-control" placeholder="Enter email address">
                        @if ($errors->has('email'))
                            <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="url" class=" form-control-label">URL/Website</label>
                        <input type="text" id="url" name="url"  class="form-control" placeholder="Enter Website/URL">
                        @if ($errors->has('url'))
                            <div class="error">{{ $errors->first('url') }}</div>
                        @endif
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="cac" class=" form-control-label">CAC No</label>
                        <input type="text" id="cac" name="cac"  class="form-control" placeholder="Enter CAC Number">
                        @if ($errors->has('cac'))
                            <div class="error">{{ $errors->first('cac') }}</div>
                        @endif
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="workforce" class=" form-control-label">Workforce</label>
                        <input type="text" id="workforce" name="workforce"  class="form-control" placeholder="Enter Workforce">
                        @if ($errors->has('workforce'))
                            <div class="error">{{ $errors->first('workforce') }}</div>
                        @endif
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="yearsofexp" class=" form-control-label">Years of Experience</label>
                        <input type="text" id="yearsofexp" name="yearsofexp"  class="form-control" placeholder="Enter Years of Experience">
                        @if ($errors->has('yearsofexp'))
                            <div class="error">{{ $errors->first('yearsofexp') }}</div>
                        @endif
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="company" class=" form-control-label">Ratings</label>
                        <select class="form-control" name="ratings">
                          <option value="" option="selected">Select Ratings</option>
                          <option value="1">Experts</option>
                          <option value="2">Peofessional</option>
                          <option value="3">Technicians</option>
                        </select>
                        @if ($errors->has('ratings'))
                            <div class="error">{{ $errors->first('ratings') }}</div>
                        @endif
                      </div>
                    </div>
                  </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <strong>Contact Person</strong>
                    </div>
                    <div class="card-body">
                          <div class="card-body card-block">
                            <div class="form-group">
                                <label for="contactname" class=" form-control-label">Name</label>
                                <input type="text" id="contactname" name="contactname"  class="form-control" placeholder="Enter Contact Name">
                                @if ($errors->has('contactname'))
                                    <div class="error">{{ $errors->first('contactname') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="contactphone" class=" form-control-label">Phone Number</label>
                                <input type="text" id="contactphone" name="contactphone"  class="form-control" placeholder="Enter Contact Phone Number ">
                                @if ($errors->has('contactphone'))
                                    <div class="error">{{ $errors->first('contactphone') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="contactemail" class=" form-control-label">Email</label>
                                <input type="text" id="contactemail" name="contactemail"  class="form-control" placeholder="Enter Contact Email">
                                @if ($errors->has('contactemail'))
                                    <div class="error">{{ $errors->first('contactemail') }}</div>
                                @endif
                            </div>
                          </div>
                    </div>

                  <div class="card">
                    <div class="card-header">
                      <strong>MD/Chairman</strong>
                    </div>
                    <div class="card-body">
                          <div class="card-body card-block">
                            <div class="form-group">
                                <label for="chairmanname" class=" form-control-label"> Name</label>
                            <input type="text" id="chairmanname" name="chairmanname"  class="form-control" placeholder="Enter Chairman Name">
                            @if ($errors->has('chairmanname'))
                                <div class="error">{{ $errors->first('chairmanname') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label for="chairmanphone" class=" form-control-label">Phone Number</label>
                                <input type="text" id="chairmanphone" name="chairmanphone"  class="form-control" placeholder="Enter Chairman Phone Number">
                                @if ($errors->has('chairmanphone'))
                                    <div class="error">{{ $errors->first('chairmanphone') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="chairmanemail" class=" form-control-label">Email</label>
                                <input type="text" id="chairmanemail" name="chairmanemail"  class="form-control" placeholder="Enter Chairman Email Address">
                                @if ($errors->has('chairmanemail'))
                                    <div class="error">{{ $errors->first('chairmanemail') }}</div>
                                @endif
                            </div>
                          </div>
                    </div>

                    <div class="card">
                      <div class="card-header">
                        <strong>Login Information</strong>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6">
                              <label for="password" class=" form-control-label">Password</label>
                              <input type="password" id="password" name="password"  class="form-control" placeholder="Enter Password">
                              @if ($errors->has('password'))
                                  <div class="error">{{ $errors->first('password') }}</div>
                              @endif
                          </div>
                          <div class="form-group col-md-6">
                              <label for="password" class=" form-control-label">Confirm Password</label>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter Password" required>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>







          <div class="form-group">
            <button type="submit" class="btn btn-dark btn-lg btn-block"><i class="fa fa-plus"></i>   Add</button>
         </div>
        </div>
        </form>

    </div>
</div>


@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/country-region-dropdown-menu/1.2.1/geodatasource-cr.min.js" charset="utf-8"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
