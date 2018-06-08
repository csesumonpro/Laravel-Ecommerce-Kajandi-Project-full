@extends('backend.admin_master')
@section('page_title','Update Product')
@section('admin_content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Default Tab</h4>
            </div>
            <div class="card-body">
                <div class="default-tab">
                    {!! Form::open(['method'=>'POST','url'=>'update-product','enctype'=>'multipart/form-data']) !!}
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Accessories</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Special features</a>
                            <a class="nav-item nav-link" id="nav-more-tab" data-toggle="tab" href="#nav-more" role="tab" aria-controls="nav-contact" aria-selected="false">More Options</a>
                        </div>
                    </nav>
                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header"><strong>Product Form</strong>
                                        <small>
                                            <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                                            <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                                        </small>
                                    </div>

                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Product Title</label>
                                            <input type="hidden" name="id" value="{{$product_by_id->id}}">
                                            <input type="text" id="company" name="name" value="{{$product_by_id->name}}" class="form-control">
                                            @if ($errors->has('name'))
                                                <div class="error">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="textarea-input" class=" form-control-label">Product Description</label>
                                            <textarea  name="description" id="textarea-input" rows="9" value="Content..." class="form-control editor">{{$product_by_id->description}}</textarea>
                                            @if ($errors->has('description'))
                                                <div class="error">{{ $errors->first('description') }}</div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="select" class=" form-control-label">Select Category</label>
                                            <select name="cat_id" id="select" class="form-control">
                                                @foreach($all_category as $category)
                                                    <option
                                                            @if($category->id==$product_by_id->cat_id)
                                                            selected="selected";
                                                            @endif
                                                            value="{{$category->id}}">{{$category->cat_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="select" class=" form-control-label">Select Sub Category</label>
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
                                            <label for="select" class=" form-control-label">Select Manufacturer</label>
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
                                            <label for="select" class=" form-control-label">Select Product Model</label>
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
                                                >Active</option>
                                                <option value="2"
                                                        @if($product_by_id->availability =='2')
                                                        selected="selected"
                                                        @endif
                                                >Out Of Stock</option>
                                                <option value="3"
                                                        @if($product_by_id->availability =='3')
                                                        selected="selected"
                                                        @endif
                                                >InActive</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Product Price</label>
                                            <input id="cc-payment" name="price" type="number" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->price}}">
                                            @if ($errors->has('price'))
                                                <div class="error">{{ $errors->first('price') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Product Quantity</label>
                                            <input id="cc-payment" name="qty" type="number" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->qty}}">
                                            @if ($errors->has('qty'))
                                                <div class="error">{{ $errors->first('qty') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Product Weight</label>
                                            <input id="cc-payment" name="weight" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->weight}}">
                                            @if ($errors->has('weight'))
                                                <div class="error">{{ $errors->first('weight') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Product Length</label>
                                            <input id="cc-payment" name="length" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->length}}">
                                            @if ($errors->has('length'))
                                                <div class="error">{{ $errors->first('length') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Enter Product Unit</label>
                                            <input id="cc-payment"  name="unit" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->unit}}">
                                            @if ($errors->has('unit'))
                                                <div class="error">{{ $errors->first('unit') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Enter Product Partnumber</label>
                                            <input id="cc-payment" name="partnumber" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->partnumber}}">
                                            @if ($errors->has('partnumber'))
                                                <div class="error">{{ $errors->first('partnumber') }}</div>
                                            @endif
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
                                                    <input type="checkbox" id="checkbox3" name="stuff_pick" value="STUFF_PICK" class="form-check-input"
                                                           @if($product_by_id->stuff_pick=='STUFF_PICK')
                                                           checked
                                                    > STUFF PICK
                                                    @else
                                                        <input type="checkbox" id="checkbox3" name="stuff_pick" value="STUFF_PICK" class="form-check-input"> STUFF PICK
                                                    @endif
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Discount Price</label>
                                            <input id="cc-payment" name="discount_price" type="number" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->discount_price}}">
                                            @if ($errors->has('discount_price'))
                                                <div class="error">{{ $errors->first('discount_price') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="file-input" class=" form-control-label">Product Image</label>
                                            <input type="file" id="file-input" name="image" class="form-control-file">
                                            <img src="{{asset($product_by_id->image)}}" alt="" width="60" height="40">
                                            @if ($errors->has('image'))
                                                <div class="error">{{ $errors->first('image') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="file-input" class=" form-control-label">Additional Image</label>
                                            <?php
                                            $all_pro = DB::table('products')->orderBy('id','desc')->take(1)->get();
                                            foreach($all_pro as $p){ ?>
                                            <?php
                                            if($p->id!=NULL){ ?>
                                            <input type="hidden" name="product_id" value="<?php  echo $p->id;?>">
                                            <?php }else{ ?>
                                            <input type="hidden" name="product_id" value="1">
                                            <?php } ?>
                                            <?php  } ?>
                                            <input type="file" id="file-input" name="product_image[]" class="form-control-file" multiple>
                                             <?php
                                                $add_image = DB::table('product_images')->get();
                                            ?>

                                            @foreach($add_image as $sing_img)
                                                @if($sing_img->product_id==$product_by_id->id)
                                                    <img src="{{asset($sing_img->product_image)}}" alt="" width="60" height="40">
                                                    @endif
                                                @endforeach
                                            @if ($errors->has('product_image'))
                                                <div class="error">{{ $errors->first('product_image') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Enter Product Keyword</label>
                                            <input id="cc-payment"  name="keyword" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$product_by_id->keyword}}">
                                            @if ($errors->has('keyword'))
                                                <div class="error">{{ $errors->first('keyword') }}</div>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-dark btn-lg btn-block">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="5%">SL</th>
                                        <th width="45%">Title</th>
                                        <th width="10%">Price</th>
                                        <th width="10%">Quantity</th>
                                        <th width="10%">Image</th>
                                        <th width="20%">Set As Accessories Product</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=0;?>
                                    @foreach($all_product as $product)
                                        <?php $i++;?>
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->qty}}</td>
                                            <td><img src="{{asset($product->image)}}" alt="" width="50" height="40"></td>
                                            <td>
                                                <div class="form-check" style="margin-top: 15px">
                                                    {{--<h6 class="text-left"> <i class="fa fa-check-square-o"></i>Set As Accessories Product</h6>--}}
                                                    <div class="checkbox">
                                                       <?php
                                                        $all_acc = DB::table('accessories')->get();
                                                        $i=0;
                                                      ?>
                                                        @foreach($all_acc as $single_acc)
                                                           @if($single_acc->product_id==$product_by_id->id)
                                                               <?php
                                                                   $all_accs = DB::table('accessories')->where('product_id',$product_by_id->id)->get();
                                                                   ?>
                                                                   <label for="checkbox2" class="form-check-label ">
                                                                       <input type="checkbox" id="checkbox2" name="accessories_id[]" value="{{$product->id}}" class="form-check-input"
                                                                       @foreach($all_accs as $cc)
                                                                           @if($cc->accessories_id==$product->id)
                                                                               checked
                                                                                   @endif
                                                                               @endforeach
                                                                       > Check
                                                                   </label>
                                                                <?php if($i=1){break;}?>
                                                               @endif
                                                            @endforeach

                                                        {{--<label for="checkbox2" class="form-check-label ">--}}
                                                            {{--<input type="checkbox" id="checkbox2" name="accessories_id[]" value="{{$product_by_id->id}}" class="form-check-input"> Check--}}
                                                        {{--</label>--}}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                            <div class="form-group">
                                <label for="textarea-input" class=" form-control-label">Special Feature</label>
                                <textarea  name="special_feature" id="textarea-input" rows="9"  class="form-control editor">{!! $product_by_id->special_feature !!}</textarea>
                                @if ($errors->has('special_feature'))
                                    <div class="error">{{ $errors->first('special_feature') }}</div>
                                @endif
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-more" role="tabpanel" aria-labelledby="nav-contact-tab">

                            <div class="form-group">
                                <label for="textarea-input" class=" form-control-label">More Description</label>
                                <textarea  name="more_description" id="textarea-input" rows="9"  class="form-control editor">{!! $product_by_id->more_description !!}</textarea>
                                @if ($errors->has('more_description'))
                                    <div class="error">{{ $errors->first('more_description') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="textarea-input" class=" form-control-label">More SPecification</label>
                                <textarea  name="more_specification" id="textarea-input" rows="9" class="form-control editor">{!! $product_by_id->more_specification !!}</textarea>
                                @if ($errors->has('more_specification'))
                                    <div class="error">{{ $errors->first('more_specification') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{Form::close()}}

                </div>
            </div>
        </div>
    </div>


@endsection