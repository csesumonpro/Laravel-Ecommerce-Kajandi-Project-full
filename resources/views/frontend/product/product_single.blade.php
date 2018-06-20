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
                <?php $zoom_image = explode('|',$product_by_id->product_image);?>

               @foreach($zoom_image as $small_image)
                    <?php $i=1;?>
                <li>
                    <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{asset($small_image)}}', largeimage: '{{asset($small_image)}}'}">
                        <img width="70" height="70" src="{{asset($small_image)}}" alt="Image Alternative text" title="Image Title" />
                    </a>
                </li>
               @endforeach
            </ul>
        </div>
        <div class="col-md-7">
            <div class="row" data-gutter="10">
                <div class="col-md-8">
                    <div class="box">
                        <div class="row">
                            <div class="col-md-6">
                                <?php $average_rating = DB::table('customer_reviews')
                                    ->where('product_id',$product_by_id->id)->get();?>
                                <?php
                                $avg = 0;
                                foreach ($average_rating as $avgr){
                                    $result = $avgr->rating;
                                    $avg = $avg+$result;
                                }?>
                                <input class="input-3" name="input-3" value="<?php
                                if($avg>0){
                                    echo  $rate_by_product = $avg/$average_rating->count();
                                }
                                ?>" class="rating-loading" data-size="xs">
                                <p class="product-page-product-rating-sign">{{$average_rating->count()}} customer reviews </p>
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
                <article class="product-review">

                    <div class="row">
                        <div class="col-md-7">
                        <?php
                            $all_review =  DB::table('customer_reviews')

                                ->where('product_id',$product_by_id->id)
//                                ->where('user_id',Auth::user()->id)
//                                ->get();
                                ->paginate(2)
                        ?>
                            <?php $all_users = DB::table('users')->get();?>
                            @foreach($all_review as $review)

                            <div class='product-review-content'>
                                <input class='input-3' name='input-3' value={{$review->rating}} class='rating-loading' data-size='xs'>
                                <p class='product-review-meta'>
                                    by @foreach($all_users as $user)
                                           @if($user->id==$review->user_id)
                                               {{$user->name}}
                                           @endif
                                        @endforeach
                                    on
                                   <?php
                                       $dt = new DateTime($review->created_at);
                                      echo $dt->format('d/m/y');
                                    ?>

                                </p>
                                <p class='product-review-body'>{{$review->review}}</p>
                            </div>
                            @endforeach

                        </div>
                        <div class="col-md-5">
                            {{Form::open(['url'=>'write-customer-review','method'=>'POST'])}}
                                <h4>Have you used this product before?</h4>
                                <div class="stars">
                                    <input type="radio" name="star" class="star-1" id="star-1" value="1">
                                    <label class="star-1" for="star-1">1</label>
                                    <input type="radio" name="star" class="star-2" id="star-2" value="2">
                                    <label class="star-2" for="star-2">2</label>
                                    <input type="radio" name="star" class="star-3" id="star-3" value="3">
                                    <label class="star-3" for="star-3">3</label>
                                    <input type="radio" name="star" class="star-4" id="star-4" value="4">
                                    <label class="star-4" for="star-4">4</label>
                                    <input type="radio" name="star" class="star-5" id="star-5" value="5">
                                    <label class="star-5" for="star-5">5</label>
                                    <span></span>
                                </div><br>
                                <input type="text" name="review" id="review" class="form-control" placeholder="Write your review">
                            <input type="hidden" name="product_id" value="{{$product_by_id->id}}">
                            <br><button href="#" class="btn btn-primary">submit review</button>
                           {!! Form::close() !!}

                        </div>
                    </div>
                </article>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                             $all_review->toArray();
                        ?>
                        <p class="category-pagination-sign"> {{$all_review->total()}} customer reviews found. Showing
                            {{ $all_review->currentPage()}} - {{$all_review->lastPage()}}
                        </p>

                    </div>
                    <div class="col-md-6">
                        <style>
                            .pagination > .active > span{
                                background-color:#CE3F51;
                                border-color: #CE3F51;
                            }
                        </style>
                        {{--{{ $all_products->count()}}--}}
                        <span class="text-center"> {{ $results = $all_review->links() }}</span>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-4">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Additional Accessories</h3>
                        <ul class="product-accessory-list">
                            <?php $all_accessories = explode('|',$product_by_id->accessories_id);?>
                           @foreach($all_accessories as $accs)
                               @foreach($all_product as $product)
                                   @if($product->id==$accs)
                                            <li class="product-accessory">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <a href="#">
                                                            <img class="product-accessory-img" src="{{asset($product->image)}}" alt="{{$product->name}}" title="{{$product->name}}" />
                                                        </a>
                                                    </div>
                                                    <div class="col-md-7">

                                                        <?php $average_rating = DB::table('customer_reviews')
                                                            ->where('product_id',$product->id)->get();?>
                                                        <?php
                                                       $avg = 0;
                                                        foreach ($average_rating as $avgr){
                                                            $result = $avgr->rating;
                                                            $avg = $avg+$result;
                                                        }?>



                                                        <input class='input-3' name='input-3'
                                                               value= "<?php
                                                               if($avg>0){
                                                                 echo  $rate_by_product = $avg/$average_rating->count();
                                                               }
                                                               ?>"
                                                               class='rating-loading' data-size='xs'>

                                                        <h5 class="product-accessory-title"><a href="#">{{$product->name}}</a></h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="product-accessory-price">${{$product->price}}</p>
                                                        <a class="btn btn-primary" href="{{route('accessories-add-to-cart',$product->id)}}"><i class="fa fa-shopping-cart"></i> Add to Cart</a>

                                                    </div>
                                                </div>
                                            </li>
                                       @endif
                                   @endforeach

                           @endforeach
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
                            {!! Form::open(['method'=>'GET','url'=>'ask-a-question','class'=>'product-page-qa-form']) !!}
                            <div class="row" data-gutter="10">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="hidden" name="product_id" value="{{$product_by_id->id}}">
                                        <input class="form-control" type="text" name="question" placeholder="Have a question? Feel free to ask." />
                                        @if ($errors->has('question'))
                                            <div class="error">{{ $errors->first('question') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input class="btn btn-primary btn-block" type="submit" value="Ask" />
                                </div>
                            </div>
                            {!! Form::close() !!}

                        <?php $all_q_a = DB::table('customer_questions')->where('product_id',$product_by_id->id)->orderBy('question','desc')->paginate('5');?>
                        @foreach($all_q_a as $qa)
                            <?php
                            $dt = new DateTime($qa->created_at);
                            $date = $dt->format('d/m/y');
                            ?>
                        <article class="product-page-qa">
                            <div class="product-page-qa-question">
                                <p class="product-page-qa-text">{{$qa->question}}</p>
                                <p class="product-page-qa-meta">asked by
                                    <?php
                                        $user = DB::table('users')->where('id',$qa->user_id)->first();
                                    ?>
                                    {{$user->name}}
                                    on {{$date}}</p>
                            </div>
                            <?php $all_ans = DB::table('customer_answers')
                                ->where('product_id',$product_by_id->id)
                                ->where('question_id',$qa->id)
                                ->orderBy('answer','desc')
                                ->get();?>
                            @if($all_ans!=NULL)
                                @foreach($all_ans as $ans)
                            <div class="product-page-qa-answer">

                                <p class="product-page-qa-text">
                                       {{$ans->answer}}
                                </p>
                                <?php
                                $dt = new DateTime($ans->created_at);
                                $date = $dt->format('d/m/y');
                                ?>
                                <?php
                                $user = DB::table('users')->where('id',$ans->user_id)->first();
                                ?>
                                <p class="product-page-qa-meta">answered by {{$user->name}} {{$date}}</p>
                            </div>
                                @endforeach
                            @endif

                              <div class="row">
                                  {!! Form::open(['url'=>'answer-a-question','method'=>'GET']) !!}
                                  <div class="col-md-10">
                                      <div class="form-group">
                                          <input type="hidden" name="product_id" value="{{$product_by_id->id}}">
                                          <input type="hidden" name="question_id" value="{{$qa->id}}">
                                          <input class="form-control" type="text" name="answer" placeholder="Provie Your Answer Here" />
                                          @if ($errors->has('answer'))
                                              <div class="error">{{ $errors->first('answer') }}</div>
                                          @endif
                                      </div>
                                  </div>
                                  <div class="col-md-2">
                                      <input class="btn btn-primary btn-block" type="submit" value="Answer" />
                                  </div>
                                  {!! Form::close() !!}
                              </div>
                        </article>
                        @endforeach
                        <span class="text-center"> {{ $all_q_a->links() }}</span>
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