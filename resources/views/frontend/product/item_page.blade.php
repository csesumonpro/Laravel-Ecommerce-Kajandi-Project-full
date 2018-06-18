@extends('frontend.front_view.front_master')

@section('main_content')
    <header class="page-header">
        <h1 class="page-title">Welding &amp; Fabrication</h1>
        <ol class="breadcrumb page-breadcrumb">
            <li><a href="../index.html">Home</a>
            </li>
            <li><a href="#">Welding &amp; Fabrication</a>
            </li>
        </ol>
        <ul class="category-selections clearfix">
            <li>
                <a class="fa fa-th-large category-selections-icon active" href="#"></a>
            </li>
            <li>
                <a class="fa fa-th-list category-selections-icon" href="#"></a>
            </li>
            <li><span class="category-selections-sign">Sort by :</span>
                {!! Form::open(['url'=>'product-sorting','method'=>'GET']) !!}
                <select onchange="this.form.submit()" class="category-selections-select" name="product_sort">
                    <option selected disabled>--Default--</option>
                    <option value="new_est">Newest First</option>
                    <option value="best_rated">Best Raited</option>
                    <option value="low_price">Price : Lowest First</option>
                    <option value="high_price">Price : Highest First</option>
                    <option value="a_to_z">Title : A - Z</option>
                    <option value="z_to_a">Title : Z - A</option>
                </select>
                {!! Form::close() !!}
            </li>
            <li><span class="category-selections-sign">Items :</span>
                {!! Form::open(['url'=>'product-sorting-item','method'=>'GET']) !!}
                <select onchange="this.form.submit()" class="category-selections-select" name="product_item">
                    <option selected disabled>--Select Item--</option>
                    <option value="nine_item">9 / page</option>
                    <option  value="twelve_item">12 / page</option>
                    <option value="eighteen_item">18 / page</option>
                    <option value="all_item">All</option>
                </select>
                {!! Form::close() !!}
            </li>
        </ul>
    </header>

    <div class="row">
        <div class="col-md-3">
            <aside class="category-filters">
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Category</h3>
                    <input type="hidden" id="category" value="2">
                    <input type="hidden" id="category_level" value="category">
                    {!! Form::open(['url'=>'product-by-category','method'=>'GET']) !!}
                    <select onchange="this.form.submit()" class="category-selections-select" name="pro_by_cat">
                        @foreach($all_category as $category)
                            <option value="{{$category->id}}" class="main-category" selected="">{{$category->cat_name}}</option>
                            @foreach($all_sub_category as $sub_category)
                                @if($sub_category->cat_id==$category->id)
                                    <option value="{{$sub_category->id}}" class="sub-category" >&nbsp;&nbsp;{{$sub_category->sub_cat_name}}</option>
                                @endif
                            @endforeach
                        @endforeach
                    </select>
                    {!! Form::close() !!}
                </div>

                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Location</h3>
                    <input type="hidden" id="category" value="2">
                    <input type="hidden" id="category_level" value="category">

                    <select class="category-selections-select">
                        <option>Abia</option>
                        <option>Adamawa</option>
                        <option>Akwa Ibom	</option>
                        <option>Anambra</option>
                        <option>Bauchi</option>
                        <option>Bayelsa</option>
                        <option>Benue</option>
                        <option>Borno</option>
                        <option>Cross River	</option>
                        <option>Delta	</option>
                        <option>Ebonyi	</option>
                        <option>Edo	</option>
                        <option>Ekiti	</option>
                        <option>Enugu	</option>
                        <option>Gombe	</option>
                        <option>Imo	</option>
                        <option>Jigawa	</option>
                        <option>Kaduna	</option>
                        <option>Kano	</option>
                        <option>Katsina	</option>
                        <option>Kebbi	</option>
                        <option>Kogi	</option>
                        <option>Kwara	</option>




                    </select>

                </div>
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Price</h3>

                    <!--<span class="rangeValues"></span>
                    <input value="500" min="500" max="50000" step="500" type="range">
                    <input value="50000" min="500" max="50000" step="500" type="range">-->

                    <input type="text" id="price-slider" />

                </div>

                <form>
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Payment type</h3>
                        <div class='checkbox'>
                            <label>
                                <input class='i-check form' name='manufacturer[]' type='checkbox' value=1 />Pay on delivery

                            </label>
                        </div>

                        <div class='checkbox'>
                            <label>
                                <input class='i-check form' name='manufacturer[]' type='checkbox' value=1 />Pay after inspection
                            </label>
                        </div>

                        <div class='checkbox'>
                            <label>
                                <input class='i-check form' name='manufacturer[]' type='checkbox' value=1 />Pay in Advance

                            </label>
                        </div>
                    </div>
                    <div class="category-filters-section">
                        <h3 class="widget-title-sm">Pricing</h3>
                        <div class='checkbox'>
                            <label>
                                <input class='i-check form' name='model[]' type='checkbox' value=1 />Instant payment
                            </label>
                        </div>
                        <div class='checkbox'>
                            <label>
                                <input class='i-check form' name='model[]' type='checkbox' value=1 />15 days Payment
                            </label>
                        </div>
                        <div class='checkbox'>
                            <label>
                                <input class='i-check form' name='model[]' type='checkbox' value=1 />30 days Payment
                            </label>
                        </div>
                    </div>


                </form>
            </aside>
        </div>
        <div class="col-md-9">
            <div class="row" id="data" data-gutter="15">
                @foreach($all_products as $product)
                    <div class='col-md-4'>
                        <div class="product ">
                            <div class="product-img-wrap">
                                <img class="product-img-primary" width="253" height="253" src="{{asset($product->image)}}" alt="{{$product->name}}" title="{{$product->name}}" />
                                <img class="product-img-alt" width="253" height="253" src="{{asset($product->image)}}" alt="{{$product->name}}" title="{{$product->name}}" />
                            </div>
                            <a class="product-link" href="{{url('/product-details/'.$product->id)}}"></a>
                            <div class="product-caption">
                                <ul class="product-caption-rating">
                                    <?php $average_rating = DB::table('customer_reviews')
                                        ->where('product_id',$product->id)->get();?>
                                    <?php
                                    $avg = 0;
                                    foreach ($average_rating as $avgr){
                                        $result = $avgr->rating;
                                        $avg = $avg+$result;
                                    }?>
                                    <?php if($avg>0){
                                    $rate_by_product = $avg/$average_rating->count();
                                    if($rate_by_product>0 && $rate_by_product<=1){?>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <?php    }elseif($rate_by_product>1 && $rate_by_product<=2){?>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <?php } elseif($rate_by_product>2 && $rate_by_product<=3){?>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <?php     }elseif ($rate_by_product>3 && $rate_by_product<=4){?>

                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <li class="rated"><i class="fa fa-star"></i>
                                    </li>
                                    <?php } elseif($rate_by_product>4 && $rate_by_product<=5){?>
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

                                    <?php } }?>
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
    </div>
    <div class="gap"></div>
@endsection
