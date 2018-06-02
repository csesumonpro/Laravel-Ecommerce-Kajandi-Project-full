<div class="col-md-9">
    <div class="owl-carousel owl-loaded owl-nav-dots-inner owl-carousel-curved" data-options='{"items":1,"loop":true}'>
        <?php
        $slider_product = DB::table('products')->where('slider',1)->take('3')->orderBY('id','desc')->get();
        ?>
     @foreach($slider_product as $product)
        <div class="owl-item">
            <div class="slider-item" style="background-color:#3D3D3D; height:490px;">
                <div class="slider-item-inner slider-item-inner-container">
                    <div class="slider-item-caption-left slider-item-caption-white slider-item-caption-sm">
                        <h4 class="slider-item-caption-title">{{$product->name}}</h4>
                        <p class="slider-item-caption-desc">
                            {!! \Illuminate\Support\Str::words($product->description, 25,'....')  !!}
                        </p><a class="btn btn-lg btn-ghost btn-white" href="{{url('/product-details/'.$product->id)}}">Shop Now</a>
                    </div>
                    <img class="slider-item-img-right" src="{{asset($product->image)}}" alt="Image Alternative text" title="Image Title" style="top: 60%; width: 66%; right: -14%;" />
                </div>
            </div>
        </div>
@endforeach

    </div>
</div>
