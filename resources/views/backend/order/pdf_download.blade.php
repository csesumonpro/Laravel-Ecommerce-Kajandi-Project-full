<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('page-title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

    <div class="row" >
        <div class="col-md-12">
            <div class="card" style="background: #0a95be">
                <div class="row text-center">
                    <div class="col-md-6" style="text-align: left;float: left;overflow: hidden;display: block">
                        <h2>R25n Technology</h2>
                        <h4>Invoice #{{$order->id}}</h4>
                        <h6>{{$order->created_at}}</h6>

                    </div>
                    <div class="col-md-6 text-center" style="text-align: right;">
                        Mobile: 0144855552<br/>
                        Mail: r25n.office@gmail.com<br/>
                        Website: www.r25n.com<br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" style="text-align: left;float:left;">
            <h2 class="text-center">Bill To</h2>
            <div class="jumbotron">
                <h4>{{$billing->bil_first_name.' '.$billing->bil_last_name}}</h4>
                <address>
                    {{$billing->bil_address_1}}<br/>
                    {{$billing->bil_address_2}}<br/>
                    {{$billing->bil_phone}}<br/>
                </address>
                <strong>{{$billing->bil_city}}</strong>,<i>{{$billing->bil_state}}</i><br/>
                <u>{{$billing->bil_zipcode}}</u>
            </div>
        </div>
        <div class="col-md-6" style="text-align: right">
            <h2 class="text-center">Shipping Address</h2>
            <div class="jumbotron">
                <h4>{{$shipping->ship_first_name.' '.$shipping->ship_last_name}}</h4>
                <address>
                    {{$shipping->ship_address_1}}<br/>
                    {{$shipping->ship_address_2}}<br/>
                    {{$shipping->ship_phone}}<br/>
                </address>
                <strong>{{$shipping->ship_city}}</strong>,<i>{{$shipping->ship_state}}</i><br/>
                <u>{{$shipping->ship_zip}}</u>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="margin-top: 100px">
            <div class="card">
                <div class="card-body" style="text-align: justify">
                    <table class="table table-striped table-bordered" width="100%">
                        <thead>
                        <tr>

                            <th width="40%">Description</th>
                            <th width="20%">Unit Cost</th>
                            <th width="20%">Quantity</th>
                            <th width="20%">Amount</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($order_details as $single_product)
                            <tr>
                                <td>{{$single_product->product_name}}</td>
                                <td>{{$price = $single_product->product_price}}</td>
                                <td>{{$qty = $single_product->product_qty}}</td>
                                <td>{{$qty*$price}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4" style="text-align: right;background: green;text-align: center;color: #fff3cd;margin-top: 20px">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Order Total</div>
                            <div class="stat-digit">{{$order->order_total}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>