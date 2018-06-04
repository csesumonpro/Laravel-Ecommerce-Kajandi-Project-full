@extends('frontend.front_view.front_master')

@section('main_content')

    <div class="row">
        <div class="col-md-3">
            <aside class="category-filters">
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Category</h3>
                    <input type="hidden" id="category" value="2">
                    <input type="hidden" id="category_level" value="category">

                    <select class="category-selections-select">
                        <option class="main-category" selected="">Main Category 1</option>
                        <option class="sub-category">Sub category 1</option>
                        <option class="sub-category">Sub category 2</option>
                        <option class="sub-category">Sub category 3</option>
                        <option class="sub-category">Sub category 4</option>


                        <option class="main-category">Main Category 2</option>

                        <option class="sub-category">Sub category 1</option>
                        <option class="sub-category">Sub category 2</option>
                        <option class="sub-category">Sub category 3</option>
                        <option class="sub-category">Sub category 4</option>



                    </select>

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
    </div>
    <div class="gap"></div>
    @endsection
