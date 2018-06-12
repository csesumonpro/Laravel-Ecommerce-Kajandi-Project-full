@extends('frontend.front_view.front_master')
@section('page-title','My Wishlist')
@section('main_content')
    <header class="page-header">
        <h1 class="page-title">My Wishlist</h1>
    </header>
    <div class="row">
        <div class="col-md-9">
            <div class="table-responsive">
                {{--<form action="#updatePost/" method="post">--}}
                    <div class="form-wrapper">
                        <table border="0">
                            <tr>
                                <th>Product</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Availability</th>
                                <th>Add to cart</th>
                                <th>Remove</th>
                            </tr>
                            <?php
                            $wishlist = DB::table('products')
                                ->join('wishlists', 'products.id', '=', 'wishlists.product_id')
                                ->where('wishlists.user_id',Auth::user()->id)
                                ->select('products.*', 'wishlists.*')
                                ->get();
                            ?>
                            @foreach($wishlist as $wl)
                            <tr class="single-item">
                                <td><img src="{{asset($wl->image)}}"></td>
                                <td><span class="pro-name">{{$wl->name}}</span></td>
                                <td><span class="price">${{$wl->price}}</span></td>
                                <td><span class="availability text-success">
                                        @if($wl->availability=='1')
                                            In Stock
                                            @elseif($wl->availability=='2')
                                           Out Of Stock
                                            @endif
                                    </span></td>
                               {{Form::open(['url'=>'add-to-cart','method'=>'POST'])}}
                                <td>
                                    <input type="hidden" name="qty" value="1">
                                    <input type="hidden" name="product_id" value="{{$wl->product_id}}">
                                    <button type="submit" class="button add-cart-item"  href="" >Add to cart</button>
                                </td>
                                {!! Form::close() !!}
                                <td><a class="button remove-item" href="{{url('remove-wishlist-item/'.$wl->id)}}" title="Remove item"><span><span><i class="fa fa-times-circle"></i></span></span></a></td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                {{--</form>--}}
            </div>
        </div>

        <div class="col-md-3">
            <div class="accounts-menu">
                <h2>My Account</h2>
                <ul>
                    <li><a href="#">Account control panel</a></li>
                    <li><a href="#">Personal information</a></li>
                    <li><a href="#">Address book</a></li>
                    <li><a href="#">My orders</a></li>
                    <li><a href="#">My Reviews &amp; Ratings</a></li>
                    <li><a href="#">My Saved Items</a></li>
                    <li><a href="#">My coupons</a></li>
                    <li><a href="#">Newsletter preferences</a></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="shopping654">
                <a href="{{route('shop')}}">Continue shopping</a> <a href="{{route('compare')}}">Compare</a>
            </div>
        </div>
    </div>
    @endsection