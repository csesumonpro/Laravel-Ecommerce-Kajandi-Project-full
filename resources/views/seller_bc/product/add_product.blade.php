@extends('seller.seller_master')
@section('page_title','Add Product')
<link rel="stylesheet" href="{{asset('public/seller/css/form.css')}}">

<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="{{asset('public/seller/js/jquery.uploadPreview.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/seller/js/jquery.uploadPreview.js')}}"></script>
<style type="text/css">
#image-preview {
  width: 400px;
  height: 400px;
  position: relative;
  overflow: hidden;
  background-color: #ffffff;
  color: #ecf0f1;
}
#image-preview input {
  line-height: 200px;
  font-size: 200px;
  position: absolute;
  opacity: 0;
  z-index: 10;
}
#image-preview label {
  position: absolute;
  z-index: 5;
  opacity: 0.8;
  cursor: pointer;
  background-color: #bdc3c7;
  width: 200px;
  height: 50px;
  font-size: 20px;
  line-height: 50px;
  text-transform: uppercase;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  text-align: center;
}
</style>




@section('seller_content')<br><br><br>

<?php
  $menufacturer = App\Manufacter::All();
  $category = App\Category::All();
  $subcategory = App\Category::All();
  $promodel = App\ProductModel::All();
 ?>

<section id="content" class="container col-md-10 offset-1">



            <div class="chute chute-center" style="height: 283px;">

                <div class="mw1000 center-block">

                    <div class="allcp-form">

                      <small>
                          <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                          <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                      </small>


                    <form method="post" action="{{ route('postSellerProduct') }}" enctype="multipart/form-data">
                                @csrf
                        <input type="hidden" name="seller_id" value="{{Auth::id()}}">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">General Information
                                </div>
                            </div>
                            <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">



                            <div class="viewproduct">
                                <div class="section row mbn">
                                    <div class="col-md-4 ph10">
                                      <div class="col-md-12" id="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="image" id="image-upload" />
                                      </div>
                                    </div>
                                    <div class="col-md-8 ph10">
                                        <div class="section mb10">
                                            <label for="name21" class="field prepend-icon">
                                                <input type="text" name="name" id="name21" class="event-name gui-input br-light light" placeholder="Product Name">
                                                <label for="name21" class="field-icon">
                                                    <i class="fa fa-tag"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <div class="section mb10">
                                            <label class="field prepend-icon">
                          <textarea style="height: 160px;" class="gui-textarea br-light bg-light" id="comment" name="description" placeholder="Product Description"></textarea>
                                                <label for="comment" class="field-icon">
                                                    <i class="fa fa-file"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="section row">
                                    <div class="col-md-4 ph10">
                                        <label class="field select">
                                            <select id="product-status" name="manufacturer_id" class="empty">

                                                    <option value="" selected="selected">manufacturer</option>
                                                    @foreach($menufacturer as $m)
                                                    <option value="{{$m->id}}" >{{$m->name}}</option>
                                                    @endforeach
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                    <!--  section  -->

                                    <div class="col-md-4 ph10">
                                        <label for="product-model" class="field select">
                                            <select id="product-model" name="model_id" class="empty">
                                                <option value="" selected="selected">Model</option>

                                                    <option value="1" selected="selected"> Model </option>
                                                    @foreach($promodel as $m)
                                                    <option value="{{$m->id}}" >{{$m->name}}</option>
                                                    @endforeach

                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>

                                    <div class="col-md-4 ph10">
                                        <label for="product-sku" class="field prepend-icon">
                                            <input type="text" name="partnumber" id="product-sku" class="gui-input" placeholder="Part Number">
                                            <label for="product-sku" class="field-icon">
                                                <i class="fa fa-barcode"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>



                                <div class="section row">
                                    <div class="col-md-4 ph10">
                                        <label for="product-unit" class="field prepend-icon">
                                            <input type="text" name="unit" id="product-unit" class="gui-input" placeholder="Product Unit">
                                            <label for="product-unit" class="field-icon">
                                                <i class="fa fa-barcode"></i>
                                            </label>
                                        </label>
                                    </div>


                                    <div class="col-md-4 ph10">
                                        <label for="product-weight" class="field prepend-icon">
                                            <input type="text" name="weight" id="product-weight" class="gui-input" placeholder="Product Weight">
                                            <label for="product-weight" class="field-icon">
                                                <i class="fa fa-barcode"></i>
                                            </label>
                                        </label>
                                    </div>


                                    <div class="col-md-4 ph10">
                                        <label for="product-length" class="field prepend-icon">
                                            <input type="text" name="length" id="product-length" class="gui-input" placeholder="Product Length">
                                            <label for="product-length" class="field-icon">
                                                <i class="fa fa-barcode"></i>
                                            </label>
                                        </label>
                                    </div>


                                </div>

                                <div class="section row">
                                    <div class="col-md-4 ph10">
                                        <label for="product-category" class="field select">
                                            <select class="productcategory" name="category">
                                                <option value="" selected="selected">Category...</option>
                                                @foreach($category as $m)
                                                <option value="{{$m->id}}" >{{$m->cat_name}}</option>
                                                @endforeach

                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>


                                    <div class="col-md-4 ph10">
                                        <label for="product-category" class="field select">
                                            <select id="subcat" name="subscategory" class="empty">
                                                <option value="">Sub Category...</option>
                                                @foreach($subcategory as $m)
                                                <option value="{{$m->id}}" >{{$m->cat_name}}</option>
                                                @endforeach

                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>



                                </div>


                                <br>


                                </div>
                            </div>

                                </div>
                                </div>

                              </div>

                                <br>
                          <div class="allcp-form">
                          <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">Product Information
                                </div>
                            </div>
                            <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">





                                <div class="section row">
                                    <div class="col-md-4 ph10">
                                        <label class="field select">
                                            <select id="product-status" name="availability" class="empty">
                                                <option value="" selected="selected">Availability</option>
                                                <option value="yes">Available</option>
                                                <option value="no">Unavailable</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>


                                    <div class="col-md-4 ph10">
                                        <label for="product-quantity" class="field prepend-icon">
                                            <input type="number" name="quantity" id="product-quantity" class="gui-input" placeholder="Quantity">
                                            <label for="product-quantity" class="field-icon">
                                                <i class="fa fa-sort-amount-desc"></i>
                                            </label>
                                        </label>
                                    </div>


                                    <div class="col-md-4 ph10">
                                        <label for="product-price" class="field prepend-icon">
                                            <input type="number" name="price" id="product-price" class="gui-input" placeholder="Price...">
                                            <label for="product-price" class="field-icon">
                                                <i class="fa fa-usd"></i>
                                            </label>
                                        </label>
                                    </div>


                                </div>

                                <div class="section row">

                                    <div class="col-md-4 ph10">
                                        <label for="product-price-15days" class="field prepend-icon">
                                            <input type="number" name="pricewithin15days" id="product-price-15days" class="gui-input" placeholder="Price within 15 days">
                                            <label for="product-price-15days" class="field-icon">
                                                <i class="fa fa-sort-amount-desc"></i>
                                            </label>
                                        </label>
                                    </div>


                                    <div class="col-md-4 ph10">
                                        <label for="product-price-30days" class="field prepend-icon">
                                            <input type="number" name="pricewithin30days" id="product-price-30days" class="gui-input" placeholder="Price within 30 days">
                                            <label for="product-price-30days" class="field-icon">
                                                <i class="fa fa-sort-amount-desc"></i>
                                            </label>
                                        </label>
                                    </div>


                                </div>

                                <div class="section row">
                                    <div class="col-md-4 ph10">
                                        <label class="field select">
                                            <select id="product-status" name="condition_id" class="empty">
                                                <option value="" selected="selected">Condition</option>
                                                                                                    <option value="1">Faily Used</option>
                                                                                                    <option value="2">New</option>
                                                                                                    <option value="3">Refurbished</option>
                                                                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>


                                    <div class="col-md-4 ph10">
                                        <label class="field select">
                                            <select id="product-status" name="source_id" class="empty">
                                                <option value="" selected="selected">Source</option>
                                                                                                    <option value="1">Retailer</option>
                                                                                                    <option value="2">Distributor</option>
                                                                                                    <option value="3">OEM</option>
                                                                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>


                                    <div class="col-md-4 ph10">
                                        <label class="field select">
                                            <select id="product-status" name="payondelivery" class="empty">
                                                <option value="0" selected="selected">Pay on delivery</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row">
                                    <div class="col-md-4 ph10">
                                        <label for="product-delivery-rate-state" class="field prepend-icon">
                                            <input type="number" name="deliveryratestate" id="product-delivery-rate-state" class="gui-input" placeholder="Delivery Rate Within State">
                                            <label for="product-delivery-rate-state" class="field-icon">
                                                <i class="fa fa-usd"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-4 ph10">
                                        <label for="product-delivery-rate-outstate-with-geozone" class="field prepend-icon">
                                            <input type="number" name="deliveryrateoutstatewithgeo" id="product-delivery-rate-outstate-with-geozone" class="gui-input" placeholder="Delivery Rate Outside State within Geo Zone">
                                            <label for="product-delivery-rate-outstate-with-geozone" class="field-icon">
                                                <i class="fa fa-usd"></i>
                                            </label>
                                        </label>
                                    </div>

                                    <div class="col-md-4 ph10">
                                        <label for="product-delivery-rate-outside-geozone" class="field prepend-icon">
                                            <input type="number" name="deliveryrateoutsidegeo" id="product-delivery-rate-outside-geozone" class="gui-input" placeholder="Delivery Outside Geo Zone">
                                            <label for="product-delivery-rate-outside-geozone" class="field-icon">
                                                <i class="fa fa-usd"></i>
                                            </label>
                                        </label>
                                    </div>

                                </div>

                                 <div class="section row">
                                    <div class="col-md-4 ph10">
                                        <label class="field select">
                                            <select id="product-status" name="addon_id" class="empty">
                                                <option value="0" selected="selected">Addon</option>
                                                                                                    <option value="1">Less than 1yr</option>
                                                                                                    <option value="2">1yr</option>
                                                                                                    <option value="3">More Than 1yr</option>
                                                                                                    <option value="4">None</option>
                                                                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-4 ph10">
                                        <label class="field select">
                                            <select id="product-status" name="strengthofmaterial" class="empty">
                                                <option value="0" selected="selected">Strength of material</option>
                                                                                                    <option value="1">Grade 1 (type 1)</option>
                                                                                                    <option value="2">Grade 2 (type 2)</option>
                                                                                                    <option value="3">Grade 3 (type 3)</option>
                                                                                                    <option value="4">Grade 4 (type 4)</option>
                                                                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>

                                  <!--  <div class="col-md-4 ph10">
                                        <label class="field select">
                                            <select id="product-status" name="vendor" class="empty">
                                                <option value="0" selected="selected">Vendor</option>
                                                                                                    <option value="13">Leister</option>
                                                                                                    <option value="14">malcolm</option>
                                                                                                    <option value="15">chalres</option>
                                                                                                    <option value="16">venil</option>
                                                                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div> -->

                                </div>

                                <div class="section row">
                                    <div class="col-md-4 ph10">
                                        <label class="field select">
                                            <select id="product-status" name="addon_type" class="empty">
                                                <option value="0" selected="selected">Addon Type</option>

                                                    <option value="Warranty">Warranty</option>
                                                    <option value="Guarantee">Guarantee</option>

                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-4 ph10">
                                            <label><b>color: </b> </label>
                                            <input type="color" name="color" value="#ff0000">
                                    </div>

                                </div>

                                </div>
                                </div>
                                </div>
                              </div>


                        <div class="allcp-form">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">Product Remark
                                </div>
                            </div>
                            <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">

                                <div class="section row">
                                    <div class="col-md-8">
                                        <div class="section mb10">
                                            <label class="field prepend-icon">
                                              <textarea style="height: 160px;" class="gui-textarea br-light bg-light" id="comment" name="remark" placeholder="Product Remark"></textarea>
                                            <label for="comment" class="field-icon">
                                                <i class="fa fa-file"></i>
                                            </label>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </div>
                            <div class="panel-footer text-right">
                            <div class="row text-left">
                                                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-bordered btn-primary mb5"> SAVE</button>
                            </div>
                            </form>
                        </div>
                        </div>
                      </div>



                    </div>



                </div>

            </div>
            </section>

<script type="text/javascript">
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",   // Default: .image-upload
    preview_box: "#image-preview",  // Default: .image-preview
    label_field: "#image-label",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false                 // Default: false
  });
});
</script>




@endsection
