@extends('frontend.front_view.front_master')
@section('page-title','order')
@section('main_content')

    <!-- cart start -->

        <div class="container">
            <div class="row">
                <div class="cart-tab-menu section-tab-menu pb-50 text-center">
                    <ul>
                        <li class="text-uppercase active">Hi, <a href="#">{{Auth::user()->name}}</a></li>
                        <p class="btn btn-info">Thanks for purchase. Recfeive your order successfully. We will contact you ASAP with delivery details.</p>
                    </ul>
                </div>
            </div>
            <div class="gap gap-small"></div>
            <div class="row">
                <div class="col-xs-12">
                    <form action="#">
                        <div class="cart-table table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="p-name">Product Name</th>
                                    <th class="p-amount">Unit Price</th>
                                    <th class="p-quantity">Quantity</th>
                                    <th class="p-total">Total</th>
                                </tr>
                                </thead>
                                <tbody class="pt-30">
                                @foreach(Cart::content() as $row)
                                    <tr>
                                        <td class="p-name text-left">
                                            <div class="cart-img">
                                                <a href="#"><img src="{{$row->options->image}}" width="60" height="80" alt=""></a>
                                            </div>
                                            <a href="#">{{$row->name}}</a>
                                            {{--<p>Lorem ipsum dolor sit <span>amet, consectetur</span></p>--}}
                                            <p class="c-p-size"><span>Size : </span> {{$row->options->size}}</p>
                                        </td>

                                        <td class="p-amount"><span class="amount">${{$row->price}}</span></td>
                                        <td class="p-quantity">
                                            <input type="text" name="qty" value="{{$row->qty}}">
                                            <input type="hidden" name="row_id" value="{{$row->rowId}}">
                                        </td>
                                        <td class="p-total">${{$row->total}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 pt-50">
                    <div class="cart-coupn-leftside">
                      <?php  $discount = Session::get('discount_amount');?>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="cart-coupon-rightside pt-50">
                        <div class="section-title">
                            <h4 class="text-center alert-success text-uppercase">cart total</h4>
                        </div>
                        <div class="amount-table table-responsive">

                            <table>
                                <tbody>
                                <tr class="s-total">
                                    <td>Sub Total <span>${{$cart_total = Cart::total()}}</span></td>
                                </tr>
                                <tr class="s-total">
                                    <td>Shipping <span>${{$shipping = $cart_total*5/100}}</span></td>
                                </tr>
                                @if($discount && Cart::count()>0)
                                    <tr class="g-total">
                                        <td>Grand Total<span class="grand">${{$gt = $cart_total+$shipping-$discount}}</span></td>
                                    </tr>
                                @elseif(Cart::count()>0)
                                    <tr class="g-total">
                                        <td>Grand Total<span class="grand">${{$gt = $cart_total+$shipping}}</span></td>
                                    </tr>
                                @endif

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="gap gap-small"></div>

    <!-- cart end -->
@stop