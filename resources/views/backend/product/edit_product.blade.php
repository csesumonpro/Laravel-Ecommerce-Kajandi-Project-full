@extends('BackEnd.admin_master')
@section('page-title','Update Product')
@section('content')
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
                    <input type="text" id="company" name="product_name" value="{{$product_by_id->product_name}}" class="form-control">
                    <input type="hidden"  name="id" value="{{$product_by_id->id}}" >
                    @if ($errors->has('product_name'))
                        <div class="error">{{ $errors->first('product_name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="textarea-input" class=" form-control-label">Product Description</label>
                    <textarea  name="product_desc" id="textarea-input" rows="9" placeholder="Content..." class="form-control editor">{!! $product_by_id->product_desc !!}</textarea>
                    @if ($errors->has('product_desc'))
                        <div class="error">{{ $errors->first('product_desc') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="textarea-input" class=" form-control-label">Additional Information</label>
                    <textarea  name="product_info" id="textarea-input" rows="9" placeholder="Content..." class="form-control editor">{!! $product_by_id->product_info !!}</textarea>

                </div>
                <div class="form-group">
                    <label for="select" class=" form-control-label">Select Main Menu</label>
                    <select name="menu_id" id="select" class="form-control">

                        @foreach($all_menu as $menu)
                            <option
                                    @if($menu->id==$product_by_id->menu_id)
                                    selected="selected";
                                    @endif
                                    value="{{$menu->id}}">{{$menu->menu_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="select" class=" form-control-label">Select Category</label>
                    <select name="category_id" id="select" class="form-control">

                        @foreach($all_category as $category)
                            <option
			                    @if($category->id==$product_by_id->category_id)
                                selected="selected";
			                   @endif
                                value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="select" class=" form-control-label">Select Brand</label>
                    <select name="brand_id" id="select" class="form-control">
                        @foreach($all_brand as $brand)
                            <option
                                    @if($brand->id==$product_by_id->brand_id)
                                    selected="selected";
                                    @endif
                                    value="{{$brand->id}}">{{$brand->brand_name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="select" class=" form-control-label">Select Material</label>
                    <select name="material_id" id="select" class="form-control">
                        @foreach($all_material as $material)
                            <option
                                    @if($material->id==$product_by_id->material_id)
                                    selected="selected";
                                    @endif
                                    value="{{$material->id}}">{{$material->material_name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="select" class=" form-control-label">Select Availability</label>
                    <select name="product_availability" id="select" class="form-control">

                        <option value="1"
                        @if($product_by_id->product_availability=='1')
                            selected="selected"
                            @endif
                        >In Stock</option>
                        <option value="2"
                        @if($product_by_id->product_availability =='2')
                            selected="selected"
                            @endif
                        >Out Of Stock</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Product Price</label>
                    <input id="cc-payment" name="product_price" type="number" value="{{$product_by_id->product_price}}" class="form-control" aria-required="true" aria-invalid="false" >
                    @if ($errors->has('product_price'))
                        <div class="error">{{ $errors->first('product_price') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Product Quantity</label>
                    <input id="cc-payment" name="product_qty" value="{{$product_by_id->product_qty}}" type="number" class="form-control" aria-required="true" aria-invalid="false">
                    @if ($errors->has('product_qty'))
                        <div class="error">{{ $errors->first('product_qty') }}</div>
                    @endif
                </div>
                <div class="form-check" style="margin-top: 15px">
                    <h6 class="text-left"> <i class="fa fa-check-square-o"></i>Check Product Type</h6>
                    <div class="checkbox">
                        <label for="checkbox1" class="form-check-label ">
                            <input type="checkbox" id="checkbox1" name="new" value="NEW" class="form-check-input"
                                   @if($product_by_id->new=='NEW')
                                   checked
                            >NEW
                            @else
                            <input type="checkbox" id="checkbox1" name="new" value="NEW" class="form-check-input">NEW
                            @endif
                        </label>
                    </div>
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
                            <input type="checkbox" id="checkbox3" name="sale" value="SALE" class="form-check-input"
                                   @if($product_by_id->sale=='SALE')
                                   checked
                            > SALE
                            @else
                            <input type="checkbox" id="checkbox3" name="sale" value="SALE" class="form-check-input"> SALE
                            @endif
                        </label>
                    </div>
                </div>
                <div class="form-check" style="margin-top: 15px">

                    <h6 class="text-left"> <i class="fa fa-check-square-o"></i>Check Product Size</h6>

                        <div class="checkbox">
                            <label for="checkbox1" class="form-check-label ">
                                @if($product_by_id->xs=='XS')
                                <input type="checkbox" id="checkbox1" name="xs" value="XS" class="form-check-input" checked/>XS
                               @else
                                    <input type="checkbox" id="checkbox1" name="xs" value="XS" class="form-check-input"/>XS
                                @endif
                            </label>
                        </div>

                        <div class="checkbox">
                            <label for="checkbox1" class="form-check-label ">
                                @if($product_by_id->s=='S')
                                <input type="checkbox" id="checkbox1" name="s" value="S" class="form-check-input" checked>S
                                @else
                                    <input type="checkbox" id="checkbox1" name="s" value="S" class="form-check-input">S
                           @endif
                            </label>
                        </div>

                        <div class="checkbox">
                            <label for="checkbox1" class="form-check-label ">
                                @if($product_by_id->m=='M')
                                <input type="checkbox" id="checkbox1" name="m" value="M" class="form-check-input" checked>M
                                @else
                                <input type="checkbox" id="checkbox1" name="m" value="M" class="form-check-input">M
                                @endif
                            </label>
                        </div>

                        <div class="checkbox">
                            <label for="checkbox1" class="form-check-label ">
                                @if($product_by_id->l=='L')
                                <input type="checkbox" id="checkbox1" name="l" value="L" class="form-check-input" checked>L
                                @else
                                <input type="checkbox" id="checkbox1" name="l" value="L" class="form-check-input">L
                                 @endif
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="checkbox1" class="form-check-label ">
                                @if($product_by_id->xl=='XL')
                                <input type="checkbox" id="checkbox1" name="xl" value="XL" class="form-check-input" checked>XL
                                @else
                                <input type="checkbox" id="checkbox1" name="xl" value="XL" class="form-check-input">XL
                                @endif
                            </label>
                        </div>
                </div>
                <div class="form-check" style="margin-top: 15px">
                    <div class="radio">
                        <h6 class="text-left"><i class="fa fa-check-square-o"></i>Set As Home Page Slider Product</h6>
                        <label for="slider1" class="form-check-label ">
                            @if($product_by_id->slider=='1')
                            <input type="radio" id="slider1" name="slider" value="1" class="form-check-input" checked>Yes
                            @else
                            <input type="radio" id="slider1" name="slider" value="1" class="form-check-input">Yes
                                @endif
                        </label>
                        <label for="slider2" class="form-check-label" style="margin-left: 25px">
                            @if($product_by_id->slider=='0')
                            <input type="radio" id="slider2" name="slider" value="0" class="form-check-input" checked>No
                            @else
                            <input type="radio" id="slider2" name="slider" value="0" class="form-check-input">No
                                @endif
                        </label>

                    </div>
                </div>
                <div class="form-check" style="margin-top: 15px;margin-bottom: 15px">
                    <div class="radio">
                        <h6 class="text-left"><i class="fa fa-check-square-o"></i>Set As Home Page Product New/Feature/BestSelling</h6>
                        <label for="radio1" class="form-check-label ">
                            @if($product_by_id->nfb=='1')
                            <input type="radio" id="radio1" name="nfb" value="1" class="form-check-input" checked>New
                            @else
                                <input type="radio" id="radio1" name="nfb" value="1" class="form-check-input">New
                            @endif
                        </label>
                        <label for="radio2" class="form-check-label" style="margin-left: 25px">
                            @if($product_by_id->nfb=='2')
                            <input type="radio" id="radio2" name="nfb" value="2" class="form-check-input" checked>Featured
                            @else
                                <input type="radio" id="radio2" name="nfb" value="2" class="form-check-input">Featured
                        @endif
                        </label>
                        <label for="radio2" class="form-check-label" style="margin-left: 25px">
                            @if($product_by_id->nfb=='3')
                            <input type="radio" id="radio3" name="nfb" value="3" class="form-check-input" checked>Best Selling
                           @else
                            <input type="radio" id="radio3" name="nfb" value="3" class="form-check-input">Best Selling
                        @endif
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="file-input" class=" form-control-label">Product Image</label>
                    <input type="file" id="file-input" name="product_image" class="form-control-file">
                    <img src="{{asset($product_by_id->product_image)}}" alt="" width="60" height="40">
                    @if ($errors->has('product_image'))
                        <div class="error">{{ $errors->first('product_image') }}</div>
                    @endif
                </div>
                <button type="submit" class="btn btn-dark btn-lg btn-block">Update</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection