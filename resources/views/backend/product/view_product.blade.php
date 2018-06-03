@extends('backend.admin_master')
@section('page_title','Update Product')
@section('admin_content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>Update Product Form</strong>
                <small>
                    <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                    <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                </small>
            </div>
            {!! Form::open(['method'=>'POST','url'=>'update-product','enctype'=>'multipart/form-data']) !!}
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Product Title</label>
                    <input readonly type="hidden" name="id" value="{{$product_by_id->id}}">
                    <input readonly type="text" id="company" name="name" value="{{$product_by_id->name}}" class="form-control">
                    @if ($errors->has('name'))
                        <div class="error">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="textarea-input readonly" class=" form-control-label">Product Description</label>
                    <textarea  readonly name="description" id="textarea-input readonly" rows="9" value="Content..." class="form-control editor">{{$product_by_id->description}}</textarea>
                    @if ($errors->has('description'))
                        <div class="error">{{ $errors->first('description') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="select"  class=" form-control-label"> Category</label>
                    <select name="cat_id" id="select" class="form-control">
                        @foreach($all_category as $category)
                            <option
                                    @if($category->id==$product_by_id->cat_id)
                                    selected="selected"
                                    @endif
                                    value="{{$category->id}}">{{$category->cat_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="select" class=" form-control-label"> Sub Category</label>
                    <select name="sub_cat_id" id="select" class="form-control">
                        @foreach($all_sub_category as $sub_category)
                            <option
                                    @if($sub_category->id==$product_by_id->sub_cat_id)
                                    selected="selected";
                                    @endif
                                    value="{{$sub_category->id}}">{{$sub_category->sub_cat_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="select" class=" form-control-label"> Manufacturer</label>
                    <select name="manufacturer_id" id="select" class="form-control">
                        @foreach($all_manufacturer as $manufacturer)
                            <option
                                    @if($manufacturer->id==$product_by_id->manufacturer_id)
                                    selected="selected";
                                    @endif
                                    value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="select" class=" form-control-label"> Product Model</label>
                    <select name="model_id" id="select" class="form-control">
                        @foreach($all_product_model as $product_model)
                            <option
                                    @if($product_model->id==$product_by_id->model_id)
                                    selected="selected";
                                    @endif
                                    value="{{$product_model->id}}">{{$product_model->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="select" class=" form-control-label">Select Availability</label>
                    <select name="availability" id="select" class="form-control">

                        <option value="1"
                                @if($product_by_id->availability=='1')
                                selected="selected"
                                @endif
                        >In Stock</option>
                        <option value="2"
                                @if($product_by_id->availability =='2')
                                selected="selected"
                                @endif
                        >Out Of Stock</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Product Price</label>
                    <input readonly id="cc-payment" name="price" type="number" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->price}}">
                    @if ($errors->has('price'))
                        <div class="error">{{ $errors->first('price') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Product Quantity</label>
                    <input readonly id="cc-payment" name="qty" type="number" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->qty}}">
                    @if ($errors->has('qty'))
                        <div class="error">{{ $errors->first('qty') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Product Weight</label>
                    <input readonly id="cc-payment" name="weight" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->weight}}">
                    @if ($errors->has('weight'))
                        <div class="error">{{ $errors->first('weight') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Product Length</label>
                    <input readonly id="cc-payment" name="length" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->length}}">
                    @if ($errors->has('length'))
                        <div class="error">{{ $errors->first('length') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Enter Product Unit</label>
                    <input readonly id="cc-payment"  name="unit" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->unit}}">
                    @if ($errors->has('unit'))
                        <div class="error">{{ $errors->first('unit') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Enter Product Partnumber</label>
                    <input readonly id="cc-payment" name="partnumber" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->partnumber}}">
                    @if ($errors->has('partnumber'))
                        <div class="error">{{ $errors->first('partnumber') }}</div>
                    @endif
                </div>
                <div class="form-check" style="margin-top: 15px">
                    <div class="radio">
                        <h6 class="text-left"><i class="fa fa-check-square-o"></i>Set As Home Page Slider Product</h6>
                        <label for="slider1" class="form-check-label ">
                            @if($product_by_id->slider=='1')
                                <input readonly type="radio" id="slider1" name="slider" value="1" class="form-check-input readonly" checked>Yes
                            @else
                                <input readonly type="radio" id="slider1" name="slider" value="1" class="form-check-input readonly">Yes
                            @endif
                        </label>
                        <label for="slider2" class="form-check-label" style="margin-left: 25px">
                            @if($product_by_id->slider=='0')
                                <input readonly type="radio" id="slider2" name="slider" value="0" class="form-check-input readonly" checked>No
                            @else
                                <input readonly type="radio" id="slider2" name="slider" value="0" class="form-check-input readonly">No
                            @endif
                        </label>

                    </div>
                </div>
                <div class="form-check" style="margin-top: 15px">
                    <h6 class="text-left"> <i class="fa fa-check-square-o"></i>Check Product Type</h6>
                    <div class="checkbox">
                        <label for="checkbox2" class="form-check-label ">
                            <input type="checkbox" id="checkbox2" name="hot" value="HOT" class="form-check-input"
                                   @if($product_by_id->hot=='HOT')
                                   checked
                            > HOT
                            @else
                                <input type="checkbox" id="checkbox2" name="hot" value="HOT" class="form-check-input"> HOT
                            @endif
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="checkbox3" class="form-check-label ">
                            <input type="checkbox" id="checkbox3" name="stuff_pick" value="SALE" class="form-check-input"
                                   @if($product_by_id->stuff_pick=='SALE')
                                   checked
                            > SALE
                            @else
                                <input type="checkbox" id="checkbox3" name="stuff_pick" value="STUFF_PICK" class="form-check-input"> STUFF PICK
                            @endif
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Discount Price</label>
                    <input readonly id="cc-payment" name="discount_price" type="number" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->discount_price}}">
                    @if ($errors->has('discount_price'))
                        <div class="error">{{ $errors->first('discount_price') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="file-input readonly" class=" form-control-label">Product Image</label>

                    <img src="{{asset($product_by_id->image)}}" alt="" width="100" height="80">
                    @if ($errors->has('image'))
                        <div class="error">{{ $errors->first('image') }}</div>
                    @endif
                </div>
                {{--<button type="submit" class="btn btn-dark btn-lg btn-block">Add</button>--}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection