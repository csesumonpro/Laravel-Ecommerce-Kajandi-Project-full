@extends('frontend.front_view.front_master')
@section('page-title','Checkout')
@section('main_content')
    <header class="page-header">
        <h3 class="page-title">Payment for #9897463c Order</h3>
    </header>

    <div class="row">
        <div class="col-md-6">
            <div class="pay-order">
                {{--<form method="post" action="#updatePost/">--}}

                    <table class="">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>QTY</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Cart::Content() as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->qty}}</td>
                                <td>${{$item->price*$item->qty}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>Sub Total</td>
                            <td> </td>
                            <td>${{Cart::total()}}</td>
                            <?php
                                Session::put('grand_total',Cart::total());
                            ?>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td> </td>
                            <td>Free </td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td> </td>
                            <td>${{Cart::total()}}</td>
                        </tr>
                        </tbody>
                    </table>
                {{--</form>--}}
            </div>


        </div>

        <div class="col-md-6 pay-order986">
            <div class="section-title mt-50 mb-25">
                <h4 class="text-uppercase">Payment Method</h4>
                <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
            </div>
            {!! Form::open(['url'=>'place-order','method'=>'POST']) !!}
            <div class="your-order">
                <div class="order-table">
                    <ul>

                        <li>
                            <label class="checkbox-title">
                                <input id="transfer" value="cash" name="payment" type="radio">
                                <button class="btn btn-primary" href="#">Cash On Delivery</button>
                            </label>

                        </li>
                        <li>
                            <label class="checkbox-title">
                                <input id="payment" value="card" name="payment" type="radio">
                                <button class="btn btn-primary" href="#">Card Payment</button>
                            </label>

                        </li>
                        <li>
                            <label class="checkbox-title">
                                <input id="paypal" value="paypal" name="payment" type="radio">
                                <button class="btn btn-primary" href="#">Paypal</button>
                            </label>

                        </li>
                    </ul>
                </div>
            </div>
            @if(Cart::total()>0)
                <button type="submit" class="btn btn-success">Place Order</button>
            @else
                <h3 class="alert alert-danger">Please add one or more product in your cart, for enable order option</h3>
                <h4><a href="{{route('shop')}}">Continue Shopping</a></h4>
            @endif
            {!! Form::close() !!}
        </div>

    </div>
    <div class="gap"></div>
@endsection