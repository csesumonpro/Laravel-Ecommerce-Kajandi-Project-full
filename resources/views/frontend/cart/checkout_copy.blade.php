@extends('frontend.front_view.front_master')
@section('page-title','Checkout')
@section('main_content')
<header class="page-header">
    <h3 class="page-title">Payment for #9897463c Order</h3>
</header>

<div class="row">
    <div class="col-md-6">
        <div class="pay-order">
            <form method="post" action="#updatePost/">

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
            </form>
        </div>


    </div>

    <div class="col-md-6 pay-order986">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary" href="#">Pay with card</button>
                <button class="btn btn-primary" href="#">Pay on delevary</button>
                <button class="btn btn-primary" href="#">Pay direct to bank </button>
                <button class="btn btn-primary" href="#">Paypal Payment</button>
                <button class="btn btn-primary" href="#">Pay with wallet</button>
            </div>

        </div>
    </div>

</div>
<div class="gap"></div>
@endsection