@extends('frontend.front_view.front_master')
@section('page-title','Single Product')
@section('main_content')

    <header class="page-header">
        <h1 class="page-title">
            @foreach($all_category as $category)
                @if($category->id == $product_by_id->cat_id)
                {{$category->cat_name}}
                @endif
            @endforeach
        </h1>
        <ol class="breadcrumb page-breadcrumb">
            <li><a href="{{url('/')}}">Home</a>
            </li>
            @if($product_by_id->cat_id!=NULL)
            <li>
                @foreach($all_category as $category)
                    @if($category->id == $product_by_id->cat_id)
                <a href="{{url('/product-category/'.$category->id)}}">{{$category->cat_name}}</a>
                    @endif
                @endforeach
            </li>
            @endif

            @if($product_by_id->sub_cat_id!=NULL)
                <li>
                    @foreach($all_sub_category as $sub_category)
                        @if($sub_category->id == $product_by_id->sub_cat_id)
                            @foreach($all_category as $category)
                                @if($category->id==$sub_category->cat_id && $sub_category->id == $product_by_id->sub_cat_id)
                            <a href="{{url('/product-sub-category/'.$sub_category->id)}}">{{$sub_category->sub_cat_name}}</a>
                            @endif
                            @endforeach
                        @endif
                    @endforeach
                </li>
            @endif
        </ol>
    </header>
    <div class="row">
        <div class="col-md-5">
            <div class="product-page-product-wrap jqzoom-stage">
                <div class="clearfix">
                    {{--<a href="{{asset('public/frontend/img/')}}/products/1499633334.jpg" id="jqzoom" data-rel="gal-1">--}}
                        {{--<img src="{{asset('public/frontend/img/')}}/products/1499633334.jpg" alt="Image Alternative text" title="Image Title" />--}}
                    {{--</a>--}}
                    <a href="{{asset($product_by_id->image)}}" id="jqzoom" data-rel="gal-1">
                        <img src="{{asset($product_by_id->image)}}" alt="Image Alternative text" title="Image Title" />
                    </a>
                </div>
            </div>
            <ul class="jqzoom-list">
                <li>
                    <a class="zoomThumbActive" href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '/img/products/1499633334.jpg', largeimage: '/img/products/1499633334.jpg'}">
                        <img src="{{asset('public/frontend/img/')}}/products/1499633334.jpg" alt="Image Alternative text" title="Image Title" />
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '/img/products/1499633334.jpg', largeimage: '/img/products/1499633334.jpg'}">
                        <img src="{{asset('public/frontend/img/')}}/products/1499633334.jpg" alt="Image Alternative text" title="Image Title" />
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '/img/products/1499633334.jpg', largeimage: '/img/products/1499633334.jpg'}">
                        <img src="{{asset('public/frontend/img/')}}/products/1499633334.jpg" alt="Image Alternative text" title="Image Title" />
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '/img/products/1499633334.jpg', largeimage: '/img/products/1499633334.jpg'}">
                        <img src="{{asset('public/frontend/img/')}}/products/1499633334.jpg" alt="Image Alternative text" title="Image Title" />
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-7">
            <div class="row" data-gutter="10">
                <div class="col-md-8">
                    <div class="box">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="input-3" name="input-3" value="4.3" class="rating-loading" data-size="xs">
                                <p class="product-page-product-rating-sign">1 customer reviews</p>
                            </div>
                            <div class="col-md-6 pull-right">
                                <h6 class="pull-right">Sold by <a href="../vendors/13.html">Leister</a></h6>
                            </div>
                        </div>


                        <p class="product-page-desc">
                           Write Customer Review Here
                        </p>
                        <table
                                class="table table-striped product-page-features-table">
                            <tbody>
                            <tr>
                                <td>Warranty Terms - Parts:</td>
                                <td>1 Year</td>
                            </tr>
                            <tr>
                                <td>Condition:</td>
                                <td>New</td>
                            </tr>
                            <tr>
                                <td>Source:</td>
                                <td>OEM</td>
                            </tr>
                            <tr>
                                <td>Manufacturer:</td>
                              <td>
                                  @foreach($all_manufacturer as $manufacturer)
                                      @if($manufacturer->id==$product_by_id->manufacturer_id)
                                      {{$manufacturer->name}}
                                      @endif
                                  @endforeach
                              </td>
                            </tr>
                            <tr>
                                <td>Model:</td>
                                <td>
                                    @foreach($all_product_model as $model)
                                        @if($model->id==$product_by_id->model_id)
                                            {{$model->name}}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>Availability:</td>
                                <td>
                                    @if($product_by_id->availability=='1')
                                        yes
                                        @else
                                        no
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Pay on Delivery:</td>
                                <td>
                                    @if($product_by_id->availability=='1')
                                        yes
                                    @else
                                        no
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-highlight">
                        {!! Form::open(['method'=>'POST','url'=>'add-to-cart']) !!}

                        <p class="product-page-price" >${{$product_by_id->price}}</p>
                        <input type="hidden" name="product_id" value="{{$product_by_id->id}}">
                        {{--<input type="radio" name="payment" class='payment' value="1" checked="checked" style="display: none;">--}}
                        <ul class="product-page-actions-list">
                            <li class="product-page-qty-item">
                                <a class="product-page-qty product-page-qty-minus">-</a>
                                <input class="product-page-qty product-page-qty-input productqty" type="number" value="1" name="qty" size="1" maxlength="10" max="10">
                                <a class="product-page-qty product-page-qty-plus">+</a>
                            </li>
                        </ul>
                        <br>
                        <button class="btn btn-block btn-primary addvendorproduct" href="#" id="1"><i class="fa fa-shopping-cart" ></i>Add to Cart</button>

                        {!! Form::close() !!}
                        <a class="btn btn-block btn-default" href="{{url('/add-to-wishlist/'.$product_by_id->id)}}"><i class="fa fa-star"></i>Wishlist</a>
                        <div class="product-page-side-section">
                            <h5 class="product-page-side-title">Share This Item</h5>
                            <ul class="product-page-share-item">
                                <li>
                                    <a class="fa fa-facebook" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-twitter" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-pinterest" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-instagram" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-google-plus" href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-page-side-section">
                            <h5 class="product-page-side-title">Shipping & Returns</h5>
                            <p class="product-page-side-text">In the store of your choice in 3-5 working days</p>
                            <p class="product-page-side-text">STANDARD 4.95 USD FREE (ORDERS OVER 50 USD) In 2-4 working days*</p>
                            <p class="product-page-side-text">EXPRESS 9.95 USD In 24-48 hours (working days)*</p>
                            <p class="product-page-side-text">* Except remote areas</p>
                            <p class="product-page-side-text">You have one month from the shipping confirmation email.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
    <div class="tabbable product-tabs">
        <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-list nav-tab-icon"></i>Overview</a>
            </li>
            <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-cogs nav-tab-icon"></i>Full Specs</a>
            </li>
            <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-star nav-tab-icon"></i>Rating and Reviews</a>
            </li>
            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-plug nav-tab-icon"></i>Accessories</a>
            </li>
            <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-comment nav-tab-icon"></i>Customer Q&A</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab-1">
                <div class="row row-eq-height product-overview-section">
                    <div class="col-md-6">
                        <img class="product-overview-img" src="{{asset($product_by_id->image)}}" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <div class="col-md-6">
                        <div class="product-overview-text">
                            <p class="product-overview-desc">
                                {!! $product_by_id->name !!}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="tab-2">
                <table class="table">
                    <thead>
                    <tr>
                        {{--<th>Specs:</th>--}}
                        {{--<th>Details:</th>--}}
                        <th width="100%">Full Description:</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {{--<td class="product-page-features-table-specs">Warranty Terms - Parts:</td>--}}
                        {{--<td class="product-page-features-table-details">1 Year</td>--}}
                        {{--<td></td>--}}
                       <td> {!! $product_by_id->description !!}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="tab-3">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="product-tab-rating-title">Overall Customer Rating:</h3>
                    </div>
                </div>
                <hr />
                <article class='product-review'>

                    <div class='product-review-content'>
                        <input class='input-3' name='input-3' value=4.3 class='rating-loading' data-size='xs'>
                        <p class='product-review-meta'>by ebere chukwu uche on 19/11/2017</p>
                        <p class='product-review-body'>Good one</p>

                    </div>
                </article>                        <div class="row">
                    <div class="col-md-6">
                        <p class="category-pagination-sign">1 customer reviews found. Showing 1 - 5</p>

                    </div>
                    <div class="col-md-6">
                        <nav>
                            <ul class="pagination category-pagination pull-right">
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                <li><a href="#">3</a>
                                </li>
                                <li><a href="#">4</a>
                                </li>
                                <li><a href="#">5</a>
                                </li>
                                <li class="last"><a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-4">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Additional Accessories</h3>
                        <ul class="product-accessory-list">
                            <li class="product-accessory">
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="#">
                                            <img class="product-accessory-img" src="img/500x500.html" alt="Image Alternative text" title="Image Title" />
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="product-page-product-rating">
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <h5 class="product-accessory-title"><a href="#">High Quality For Sony XPERIA Z AC Wall Charger USB Cable ORIGINAl OEM</a></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="product-accessory-price">$10.99</p><a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="product-accessory">
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="#">
                                            <img class="product-accessory-img" src="img/500x500.html" alt="Image Alternative text" title="Image Title" />
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="product-page-product-rating">
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <h5 class="product-accessory-title"><a href="#">1x USB Cable For XPERIA Z Ultra Charger Data 8Pin Cord</a></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="product-accessory-price">$36.99</p><a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="product-accessory">
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="#">
                                            <img class="product-accessory-img" src="img/500x500.html" alt="Image Alternative text" title="Image Title" />
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="product-page-product-rating">
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <h5 class="product-accessory-title"><a href="#">Fire Skull HAPPY Protective Shell Hard Skin Case Back Cover for Sony XPERIA Z</a></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="product-accessory-price">$44.99</p><a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="product-accessory">
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="#">
                                            <img class="product-accessory-img" src="img/500x500.html" alt="Image Alternative text" title="Image Title" />
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="product-page-product-rating">
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <h5 class="product-accessory-title"><a href="#">Leather Flip Painted For Sony XPERIA Z Ultra Stand Wallet Case Cover Card Holder</a></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="product-accessory-price">$47.99</p><a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="product-accessory">
                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="#">
                                            <img class="product-accessory-img" src="img/500x500.html" alt="Image Alternative text" title="Image Title" />
                                        </a>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="product-page-product-rating">
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                            <li class="rated"><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <h5 class="product-accessory-title"><a href="#">20000mAh Portable Powerbank External Battery Charger for Sony, iPhone, Samsung, HTC, LG</a></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <p class="product-accessory-price">$40.99</p><a class="btn btn-primary" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>What's Inculded</h3>
                        <ul class="product-accessory-included-list">
                            <li>Sony Xperia Z Ultra Smartphone</li>
                            <li>Sony Xperia Z Ultra C6833 4G Handset</li>
                            <li>Battery</li>
                            <li>Stereo Headset</li>
                            <li>Charger</li>
                            <li>USB Cable</li>
                            <li>User Manuel</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-5">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="product-page-qa-form">
                            <div class="row" data-gutter="10">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Have a question? Feel free to ask." />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input class="btn btn-primary btn-block" type="submit" value="Ask" />
                                </div>
                            </div>
                        </form>
                        <article class="product-page-qa">
                            <div class="product-page-qa-question">
                                <p class="product-page-qa-text">Is this the 6.6 inch screen?</p>
                                <p class="product-page-qa-meta">asked by Richard Jones on 08/14/2015</p>
                            </div>
                            <div class="product-page-qa-answer">
                                <p class="product-page-qa-text">No, this is the 6.4 inch screen</p>
                                <p class="product-page-qa-meta">answered on 08/14/2015</p>
                            </div>
                        </article>
                        <article class="product-page-qa">
                            <div class="product-page-qa-question">
                                <p class="product-page-qa-text">for those who owns this model phone in USA, may I know if this phone has the 4G LTE in Tmobile's network? Thank you in advance.</p>
                                <p class="product-page-qa-meta">asked by Joseph Hudson on 08/14/2015</p>
                            </div>
                            <div class="product-page-qa-answer">
                                <p class="product-page-qa-text">Yes. can use TMobile LTE 1700MHZ.</p>
                                <p class="product-page-qa-meta">answered on 08/14/2015</p>
                            </div>
                        </article>
                        <article class="product-page-qa">
                            <div class="product-page-qa-question">
                                <p class="product-page-qa-text">I'm from Puerto Rico! this phone work for me???</p>
                                <p class="product-page-qa-meta">asked by Neil Davidson on 08/14/2015</p>
                            </div>
                            <div class="product-page-qa-answer">
                                <p class="product-page-qa-text">Yes... It will work with any gsm radio system in the world... It does not work, however on any cdma radio system...</p>
                                <p class="product-page-qa-meta">answered on 08/14/2015</p>
                            </div>
                        </article>
                        <article class="product-page-qa">
                            <div class="product-page-qa-question">
                                <p class="product-page-qa-text">so this phone works on tmobile current network ll i have to do is switch the sim card?</p>
                                <p class="product-page-qa-meta">asked by Blake Hardacre on 08/14/2015</p>
                            </div>
                            <div class="product-page-qa-answer">
                                <p class="product-page-qa-text">the phone works fine with T-mobile's 4G LTE network, all you have to do is get a micro-sim card and insert it to start using your phone, if you already have a micro-sim sized card then just plug in.</p>
                                <p class="product-page-qa-meta">answered on 08/14/2015</p>
                            </div>
                        </article>
                        <article class="product-page-qa">
                            <div class="product-page-qa-question">
                                <p class="product-page-qa-text">does it work on the boost mobile network?</p>
                                <p class="product-page-qa-meta">asked by John Mathis on 08/14/2015</p>
                            </div>
                            <div class="product-page-qa-answer">
                                <p class="product-page-qa-text">It only works on gms networks so you have to check I think boost mobile is cmd network like verizon towers not sure</p>
                                <p class="product-page-qa-meta">answered on 08/14/2015</p>
                            </div>
                        </article>
                        <article class="product-page-qa">
                            <div class="product-page-qa-question">
                                <p class="product-page-qa-text">Is this version waterproof?</p>
                                <p class="product-page-qa-meta">asked by Brandon Burgess on 08/14/2015</p>
                            </div>
                            <div class="product-page-qa-answer">
                                <p class="product-page-qa-text">All Sony Xperia z lines are water proof the Sony Xperia z1,z2,z3,z ultra all of those</p>
                                <p class="product-page-qa-meta">answered on 08/14/2015</p>
                            </div>
                        </article>
                        <article class="product-page-qa">
                            <div class="product-page-qa-question">
                                <p class="product-page-qa-text">how strong is the phone..does the screen crack easily ?</p>
                                <p class="product-page-qa-meta">asked by Blake Abraham on 08/14/2015</p>
                            </div>
                            <div class="product-page-qa-answer">
                                <p class="product-page-qa-text">Is strong enough to keep running even if it drops a few times, but I reckon if you kick it it Will smash, as any smartphone in the World. I had it for 3 months and it hasn't got a scratch.</p>
                                <p class="product-page-qa-meta">answered on 08/14/2015</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
    <h3 class="widget-title">You Might Also Like</h3>
    <div class="row" data-gutter="15">
        <?php
          $related_product = DB::table('products')
              ->where('cat_id',$product_by_id->cat_id)
              ->where('sub_cat_id',$product_by_id->sub_cat_id)
              ->where('manufacturer_id',$product_by_id->manufacturer_id)
              ->where('model_id',$product_by_id->model_id)
              ->take('4')
              ->orderBY('id','desc')
              ->get();
        ?>
        @foreach($related_product as $product)
        <div class='col-md-3'>
            <div class="product ">
                <ul class="product-labels">
                    @if($product->hot!=NULL && $product->stuff_pick!=NULL)
                        <li>stuff pick</li>
                        <li>hot</li>
                    @elseif($product->hot!=NULL && $product->discount_price!=NULL)
                        <li>hot</li>
                        <li>
                            <?php
                            if($product->discount_price!=NULL && $product->discount_price<$product->price){
                                $discount = $product->price - $product->discount_price;
                                $main_price = $product->price;
                                $percentage = 100*($discount/$main_price);
                                echo $percentage."%";
                            }
                            ?>
                        </li>
                    @elseif($product->hot!=NULL)
                        <li>hot</li>
                    @elseif($product->stuff_pick!=NULL)
                        <li>stuff pick</li>
                    @elseif($product->discount_price!=NULL)
                        <li>-30</li>
                    @endif
                </ul>
                <div class="product-img-wrap">
                    <img class="product-img-primary" width="253" height="253" src="{{asset($product->image)}}" alt="{{$product->name}}" title="{{$product->name}}" />
                    <img class="product-img-alt" width="253" height="253" src="{{asset($product->image)}}" alt="{{$product->name}}" title="{{$product->name}}" />
                </div>
                <a class="product-link" href="{{url('/product-details/'.$product->id)}}"></a>
                <div class="product-caption">
                    <ul class="product-caption-rating">
                        <li class="rated"><i class="fa fa-star"></i>
                        </li>
                        <li class="rated"><i class="fa fa-star"></i>
                        </li>
                        <li class="rated"><i class="fa fa-star"></i>
                        </li>
                        <li class="rated"><i class="fa fa-star"></i>
                        </li>
                        <li class="rated"><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <h5 class="product-caption-title">{{$product->name}}</h5>
                    <div class="product-caption-price">


                       <span class="product-caption-price-new">
                          @if($product->discount_price==NULL)
                               $ {{$product->price}}
                           @endif
                        </span>
                        @if($product->discount_price!=NULL)
                            <span class="product-caption-price-old">${{$product->price}}</span>
                            <span class="product-caption-price-new">${{$product->discount_price}}</span>
                        @endif
                    </div>
                    <ul class="product-caption-feature-list">
                        <li>{{$product->qty}} left</li>
                        <li>Free Shipping</li>
                    </ul>
                </div>
            </div>
        </div>
            @endforeach

    </div>
    </div>

@stop