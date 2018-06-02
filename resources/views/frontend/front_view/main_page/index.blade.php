@extends('frontend.front_view.front_master')

@section('page-title',  'Global Source || Main')

@section('main_sidebar')
  @include('frontend.front_view.includes.Sidebar')
@endsection

@section('main_slider')
  @include('frontend.front_view.includes.slider')
@endsection


@section('main_content')
<div class="row" data-gutter="15">
    <div class="col-md-4">
        <div class="banner" style="background-color:#83599A;">
            <a class="banner-link" href="#"></a>
            <div class="banner-caption-top-left">
                <h5 class="banner-title">Safety Collection</h5>
                <p class="banner-desc">Vest Safety t-shirts .</p>
                <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                </p>
  <p class="price">$33</p>
            </div>
            <img class="banner-img" src="{{asset('public/frontend/img/')}}/home/vests-t-shirts.png" alt="Image Alternative text" title="Image Title" style="bottom: -8px; right: -32px;">
        </div>
    </div>
    <div class="col-md-4">
        <div class="banner" style="background-color:#EF4D9C;">
            <a class="banner-link" href="#"></a>
            <div class="banner-caption-top-right">
                <h5 class="banner-title">Welding Machines</h5>
                <p class="banner-desc">Tig Machine</p>
                <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                </p>
  <p class="price">$33</p>
            </div>
            <img class="banner-img" src="{{asset('public/frontend/img/')}}/home/tig_welding.png" alt="Image Alternative text" title="Image Title" style="bottom: -22px; left: 0; width: 235px;">
        </div>
    </div>
    <div class="col-md-4">
        <div class="banner" style="background-color:#FEA92E;">
            <a class="banner-link" href="#"></a>
            <div class="banner-caption-bottom-left">
                <h5 class="banner-title">HVAC</h5>
                <p class="banner-desc">Rooftops Airconditioning.</p>
                <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                </p>
  <p class="price">$33</p>
            </div>
            <img class="banner-img" src="{{asset('public/frontend/img/')}}/home/Tipo-Paquete-Condensado-por-Aire-Marca-Trane-de-5-TR-en-adelante.png" alt="Image Alternative text" title="Image Title" style="top: -4px; right: -15px; width: 220px;">
        </div>
    </div>
</div>

<div class="gap"></div>
<h3 class="widget-title">Today Featured</h3>
<div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":5,"loop":true,"nav":true}'>
    <div class="owl-item">
        <div class="product  owl-item-slide">
            <div class="product-img-wrap">
                <img class="product-img" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />

            </div>
            <a class="product-link" href="#"></a>
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
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">Hamilton Beach 49996 FlexBrew Single-Serve Coffeemaker with Removable Reservoir</h5>
                <div class="product-caption-price">
    <span class="product-caption-price-old">$147</span><span class="product-caption-price-new">$133</span>
    <a class="wishlist98" href="#"><i class="fa fa-heart"></i></a>
                </div>

            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="product  owl-item-slide">
            <div class="product-img-wrap">
                <img class="product-img" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                <h5 class="product-caption-title">Google Nexus 6 XT1103 4G LTE - 32GB - Blue Factory Unlocked GSM</h5>
                <div class="product-caption-price"><span class="product-caption-price-old">$147</span><span class="product-caption-price-new">$45</span>
  <a class="wishlist98" href="#"><i class="fa fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="product  owl-item-slide">
            <div class="product-img-wrap">
                <img class="product-img" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">New Authentic Gucci Patent Leather Open Toe Platform Pump,Gren, 309984 3125</h5>
                <div class="product-caption-price"><span class="product-caption-price-old">$66</span><span class="product-caption-price-new">$33</span>
  <a class="wishlist98" href="#"><i class="fa fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="product  owl-item-slide">
            <div class="product-img-wrap">
                <img class="product-img" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">New Asus X551MAV 15.6" HD N2830 2.16GHz 4GB 500GB Windows 8 Laptop Notebook</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$149</span>
  <a class="wishlist98" href="#"><i class="fa fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="product  owl-item-slide">
            <div class="product-img-wrap">
                <img class="product-img" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                <h5 class="product-caption-title">FootJoy Contour Casual Spikeless Golf Shoes Black Mens Closeout 54284 New</h5>
                <div class="product-caption-price"><span class="product-caption-price-old">$129</span><span class="product-caption-price-new">$117</span>
  <a class="wishlist98" href="#"><i class="fa fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="product  owl-item-slide">
            <div class="product-img-wrap">
                <img class="product-img" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                <h5 class="product-caption-title">RK7241S Table Saw with Laser by Rockwell</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$150</span>
  <a class="wishlist98" href="#"><i class="fa fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="product  owl-item-slide">
            <div class="product-img-wrap">
                <img class="product-img" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">Sterling Tools 31 Piece Ratchet Screwdriver Wrench Set</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$81</span>
  <a class="wishlist98" href="#"><i class="fa fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="product  owl-item-slide">
            <div class="product-img-wrap">
                <img class="product-img" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">Samsung Galaxy S6 Edge+ Factory Unlocked GSM 32GB</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$88</span>
  <a class="wishlist98" href="#"><i class="fa fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="product  owl-item-slide">
            <div class="product-img-wrap">
                <img class="product-img" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
            <div class="product-caption">
                <ul class="product-caption-rating">
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">Black 1000-Watt 6-Quart Electric Pressure Cooker Brushed Stainless and Matte 603</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$98</span>
  <a class="wishlist98" href="#"><i class="fa fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="product  owl-item-slide">
            <div class="product-img-wrap">
                <img class="product-img" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                <h5 class="product-caption-title">Dyson DC50 Animal Compact Upright Vacuum</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$95</span>
  <a class="wishlist98" href="#"><i class="fa fa-heart"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

 <div class="gap"></div>
<div class="container">
<h3 class="widget-title-lg">Best of Tech</h3>
<div class="row" data-gutter="15">
    <div class="col-md-4">
        <div class="product ">
            <ul class="product-labels">
                <li>stuff pick</li>
            </ul>
            <div class="product-img-wrap">
                <img class="product-img-primary" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
                <img class="product-img-alt" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                <h5 class="product-caption-title">LG G3 VS985 - 32GB - Verizon Smartphone - Metallic Black or Silk White - Great</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$141</span>
                </div>
                <ul class="product-caption-feature-list">
                    <li>Free Shipping</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="product ">
            <ul class="product-labels">
                <li>hot</li>
            </ul>
            <div class="product-img-wrap">
                <img class="product-img-primary" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
                <img class="product-img-alt" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">HTC One M8 32GB Factory Unlocked Smartphone  Gold / Silver Gray</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$71</span>
                </div>
                <ul class="product-caption-feature-list">
                    <li>Free Shipping</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="product ">
            <ul class="product-labels">
                <li>-50%</li>
            </ul>
            <div class="product-img-wrap">
                <img class="product-img-primary" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
                <img class="product-img-alt" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">Apple 11.6" MacBook Air Notebook Computer MJVM2LL/A (Early 2015)</h5>
                <div class="product-caption-price"><span class="product-caption-price-old">$84</span><span class="product-caption-price-new">$42</span>
                </div>
                <ul class="product-caption-feature-list">
                    <li>1 left</li>
                    <li>Free Shipping</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row" data-gutter="15">
    <div class="col-md-3">
        <div class="product ">
            <ul class="product-labels">
                <li>-20%</li>
            </ul>
            <div class="product-img-wrap">
                <img class="product-img-primary" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
                <img class="product-img-alt" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">Samsung Chromebook 11.6" LED HD 16GB 1.7GHz Webcam Notebook Laptop -XE303C12-A01</h5>
                <div class="product-caption-price"><span class="product-caption-price-old">$56</span><span class="product-caption-price-new">$45</span>
                </div>
                <ul class="product-caption-feature-list">
                    <li>2 left</li>
                    <li>Free Shipping</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="product ">
            <ul class="product-labels">
                <li>stuff pick</li>
            </ul>
            <div class="product-img-wrap">
                <img class="product-img-primary" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
                <img class="product-img-alt" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
            <div class="product-caption">
                <ul class="product-caption-rating">
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">Apple iPhone 4S 16GB Factory Unlocked Black and White Smartphone</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$123</span>
                </div>
                <ul class="product-caption-feature-list">
                    <li>Free Shipping</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="product ">
            <ul class="product-labels">
                <li>-60%</li>
                <li>hot</li>
            </ul>
            <div class="product-img-wrap">
                <img class="product-img-primary" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
                <img class="product-img-alt" src="{{asset('public/frontend/img/')}}/490x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                <h5 class="product-caption-title">Motorola XT1096 Moto X 2nd Generation 16GB Verizon Wireless gsm unlocked</h5>
                <div class="product-caption-price"><span class="product-caption-price-old">$112</span><span class="product-caption-price-new">$45</span>
                </div>
                <ul class="product-caption-feature-list">
                    <li>Free Shipping</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="product ">
            <ul class="product-labels">
                <li>-10%</li>
                <li>hot</li>
            </ul>
            <div class="product-img-wrap">
                <img class="product-img-primary" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
                <img class="product-img-alt" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
            <div class="product-caption">
                <ul class="product-caption-rating">
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">LG G Flex D959 - 32GB - Titan Silver GSM Unlocked Android Smartphone (B)</h5>
                <div class="product-caption-price"><span class="product-caption-price-old">$65</span><span class="product-caption-price-new">$59</span>
                </div>
                <ul class="product-caption-feature-list">
                    <li>Free Shipping</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row" data-gutter="15">
    <div class="col-md-3">
        <div class="product ">
            <ul class="product-labels"></ul>
            <div class="product-img-wrap">
                <img class="product-img-primary" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
                <img class="product-img-alt" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                <h5 class="product-caption-title">LG G3 VS985 - 32GB - Verizon Smartphone - Metallic Black or Silk White - Great</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$66</span>
                </div>
                <ul class="product-caption-feature-list">
                    <li>Free Shipping</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="product ">
            <ul class="product-labels">
                <li>hot</li>
            </ul>
            <div class="product-img-wrap">
                <img class="product-img-primary" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
                <img class="product-img-alt" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
            <div class="product-caption">
                <ul class="product-caption-rating">
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">Apple iPhone 5s 16GB Factory Unlocked Smartphone Space Gray / Silver / Gold</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$67</span>
                </div>
                <ul class="product-caption-feature-list">
                    <li>Free Shipping</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="product ">
            <ul class="product-labels">
                <li>stuff pick</li>
            </ul>
            <div class="product-img-wrap">
                <img class="product-img-primary" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
                <img class="product-img-alt" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
            <div class="product-caption">
                <ul class="product-caption-rating">
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li class="rated"><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                    <li><i class="fa fa-star"></i>
                    </li>
                </ul>
                <h5 class="product-caption-title">Google Nexus 6 XT1103 4G LTE - 32GB - Blue Factory Unlocked GSM</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$76</span>
                </div>
                <ul class="product-caption-feature-list">
                    <li>Free Shipping</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="product ">
            <ul class="product-labels"></ul>
            <div class="product-img-wrap">
                <img class="product-img-primary" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
                <img class="product-img-alt" src="{{asset('public/frontend/img/')}}/500x500.png" alt="Image Alternative text" title="Image Title" />
            </div>
            <a class="product-link" href="#"></a>
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
                <h5 class="product-caption-title">Samsung Galaxy Note 4 IV 4G FACTORY UNLOCKED Black or White</h5>
                <div class="product-caption-price"><span class="product-caption-price-new">$56</span>
                </div>
                <ul class="product-caption-feature-list">
                    <li>Free Shipping</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="gap"></div>
<div class="row" data-gutter="15">
    <div class="col-md-6">
        <div class="banner" style="background-color:#9C7B60;">
            <a class="banner-link" href="#"></a>
            <div class="banner-caption-left">
                <h5 class="banner-title">HVAC</h5>
                <p class="banner-desc">Heating and Cooling Systems Air Filter</p>
                <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                </p>
  <p class="price">$100</p>
            </div>
            <img class="banner-img" src="{{asset('public/frontend/img/')}}/home/airqual2.png" alt="Image Alternative text" title="Image Title" style="bottom: -8px; right: 11px; width: 238px;">
        </div>
    </div>
    <div class="col-md-6">
        <div class="banner" style="background-color:#DF643B;">
            <a class="banner-link" href="#"></a>
            <div class="banner-caption-left">
                <h5 class="banner-title">Navigation & Communication</h5>
                <p class="banner-desc">Integrated Safety Navigator.</p>
                <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                </p>
  <p class="price">$200</p>
            </div>
            <img class="banner-img" src="{{asset('public/frontend/img/')}}/home/p-KSN770-list-300x215.png" alt="Image Alternative text" title="Image Title" style="bottom: 0px; right: -20px; width: 326px;">
        </div>
    </div>
</div>

<div class="gap"></div>
<div class="container">
<h3 class="widget-title-lg">Shop by Category</h3>
<div class="row row-sm-gap" data-gutter="15">
    @foreach($all_category as $category)
    <div class="col-md-2">
        <a class="banner-category" href="#">
            <img class="banner-category-img" src="{{asset($category->cat_image)}}" alt="{{$category->cat_title}}" title="{{$category->cat_title}}" width="100" height="60" />
            <h5 class="banner-category-title">{{$category->cat_name}}</h5>
          {{--Query for count category by product--}}
            <?php
            $count = DB::table('products')->where('cat_id',$category->id)->count();
            ?>
            <p class="banner-category-desc">{{$count}} products</p>

        </a>
    </div>
    @endforeach
</div>
</div>
<div class="gap"></div>
</div>
    @include('frontend.front_view.includes.newsfeed')
@endsection
