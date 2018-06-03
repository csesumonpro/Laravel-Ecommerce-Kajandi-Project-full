@extends('backend.admin_master')
@section('page_title','Add Product')
@section('admin_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Product Form</strong>
                <small>
                    <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                    <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                </small>
            </div>
                {!! Form::open(['method'=>'POST','url'=>'save-product','enctype'=>'multipart/form-data']) !!}
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Product Title</label>
                        <input type="text" id="company" name="name" placeholder="Enter Product Name" class="form-control">
                        @if ($errors->has('name'))
                            <div class="error">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="textarea-input" class=" form-control-label">Product Description</label>
                        <textarea  name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control editor"></textarea>
                        @if ($errors->has('description'))
                            <div class="error">{{ $errors->first('description') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="select" class=" form-control-label">Select Category</label>
                        <select name="cat_id" id="select" class="form-control">
                            <option value="0">Select one</option>
                            @foreach($all_category as $category)
                            <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select" class=" form-control-label">Select Sub Category</label>
                        <select name="sub_cat_id" id="select" class="form-control">
                            <option value="0">Select One</option>
                            @foreach($all_sub_category as $sub_category)
                                <option value="{{$sub_category->id}}">{{$sub_category->sub_cat_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select" class=" form-control-label">Select Manufacturer</label>
                        <select name="manufacturer_id" id="select" class="form-control">
                            <option value="0">Select One</option>
                            @foreach($all_manufacturer as $manufacturer)
                            <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select" class=" form-control-label">Select Product Model</label>
                        <select name="model_id" id="select" class="form-control">
                            <option value="0">Select One</option>
                            @foreach($all_product_model as $product_model)
                            <option value="{{$product_model->id}}">{{$product_model->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select" class=" form-control-label">Select Availability</label>
                        <select name="availability" id="select" class="form-control">
                            <option value="1">In Stock</option>
                            <option value="2">Out Of Stock</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Product Price</label>
                        <input id="cc-payment" name="price" type="number" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Product Price">
                        @if ($errors->has('price'))
                            <div class="error">{{ $errors->first('price') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Product Quantity</label>
                        <input id="cc-payment" name="qty" type="number" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Product Quantity">
                        @if ($errors->has('qty'))
                            <div class="error">{{ $errors->first('qty') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Product Weight</label>
                        <input id="cc-payment" name="weight" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Product weight">
                        @if ($errors->has('weight'))
                            <div class="error">{{ $errors->first('weight') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Product Length</label>
                        <input id="cc-payment" name="length" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Product weight">
                        @if ($errors->has('length'))
                            <div class="error">{{ $errors->first('length') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Enter Product Unit</label>
                        <input id="cc-payment"  name="unit" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Product Unit">
                        @if ($errors->has('unit'))
                            <div class="error">{{ $errors->first('unit') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Enter Product Partnumber</label>
                        <input id="cc-payment" name="partnumber" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Product Partnumber">
                        @if ($errors->has('partnumber'))
                            <div class="error">{{ $errors->first('partnumber') }}</div>
                        @endif
                    </div>
                    <div class="form-check" style="margin-top: 15px">
                        <div class="radio">
                            <h6 class="text-left"><i class="fa fa-check-square-o"></i>Set As Home Page Slider Product</h6>
                            <label for="slider1" class="form-check-label ">
                                <input type="radio" id="slider1" name="slider" value="1" class="form-check-input" >Yes
                            </label>
                            <label for="slider2" class="form-check-label" style="margin-left: 25px">
                                <input type="radio" id="slider2" name="slider" value="0" class="form-check-input" checked>No
                            </label>
                        </div>
                    </div>
                    <div class="form-check" style="margin-top: 15px">
                        <h6 class="text-left"> <i class="fa fa-check-square-o"></i>Check Product Type</h6>
                        <div class="checkbox">
                            <label for="checkbox2" class="form-check-label ">
                                <input type="checkbox" id="checkbox2" name="hot" value="HOT" class="form-check-input"> HOT
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="checkbox3" class="form-check-label ">
                                <input type="checkbox" id="checkbox3" name="stuff_pick" value="STUFF_PICK" class="form-check-input"> Stuff Pick
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Discount Price</label>
                        <input id="cc-payment" name="discount_price" type="number" class="form-control" aria-required="true" aria-invalid="false" placeholder="Enter Product Price If You Want">
                        @if ($errors->has('discount_price'))
                            <div class="error">{{ $errors->first('discount_price') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="file-input" class=" form-control-label">Product Image</label>
                        <input type="file" id="file-input" name="image" class="form-control-file">
                        @if ($errors->has('image'))
                            <div class="error">{{ $errors->first('image') }}</div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-dark btn-lg btn-block">Add</button>
                 </div>
            {!! Form::close() !!}
        </div>
    </div>


@endsection