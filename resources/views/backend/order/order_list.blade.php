@extends('backend.admin_master')
@section('page_title','Manage Order')
@section('admin_content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Order List Table</strong>
            <small>
                <p class="text-center alert-success">{{Session::get('message_success')}}</p>
                <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
            </small>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th width="5%">SL</th>
                    <th width="15%">Customer Name</th>
                    <th width="10%">Order Total</th>
                    <th width="20%">Order Date</th>
                    <th width="10%">Order Status</th>
                    <th width="10%">Payment Type</th>
                    <th width="30%">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
                @foreach($order_list as $order)
                    <?php $i++;?>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$order->bil_first_name." ".$order->bil_last_name}}</td>
                    <td>{{$order->order_total}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->order_status}}</td>
                    <td>{{$order->payment_type}}</td>

                    <td>
                        <a class="btn btn-info" href="{{url('/view-order/'.$order->id)}}"><i class="fa fa-eye"></i> </a>
                        <a class="btn btn-success" href="{{url('/download-pdf/'.$order->id)}}"><i class="fa fa-download"></i> </a>
                        @if($order->order_status=='pending')
                        <a class="btn btn-primary" href="{{url('/order-status/'.$order->id)}}"><i class="fa fa-star-o"></i> </a>
                        @elseif($order->order_status=='confirm')
                            <a class="btn btn-primary" href="{{url('/order-status/'.$order->id)}}"><i class="fa fa-star"></i> </a>
                        @endif
                        <a class="btn btn-warning" href="{{url('/edit-order/'.$order->id)}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="{{url('/order-delete/'.$order->id)}}"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection