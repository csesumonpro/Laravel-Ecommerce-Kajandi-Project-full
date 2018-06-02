@extends('backend.admin_master')
@section('page_title','Product List')
@section('admin_content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Category List Table</strong>
            <small>
                <p class="text-center  alert-success">{{Session::get('message_success')}}</p>
                <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
            </small>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th width="5%">SL</th>
                    <th width="45%">Title</th>
                    <th width="10%">Price</th>
                    <th width="10%">Quantity</th>
                    <th width="10%">Image</th>
                    <th width="20%">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
                @foreach($product_list as $product)
                    <?php $i++;?>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->qty}}</td>
                    <td><img src="{{$product->image}}" alt="" width="50" height="40"></td>
                    <td>
                        <a class="btn btn-primary" href="{{url('/edit-product/'.$product->id)}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger" href="{{url('/delete-product/'.$product->id)}}"><i class="fa fa-trash-o"></i></a>
                        <a class="btn btn-info" href="{{url('/product-view/'.$product->id)}}"><i class="fa fa-info"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection