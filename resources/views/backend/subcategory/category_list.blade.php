@extends('backend.admin_master')
@section('page_title','Category List')
@section('admin_content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Sub Category List Table</strong>
            <small>
                <p class="text-center alert-success">{{Session::get('message_success')}}</p>
                <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
            </small>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th width="10%">SL</th>
                    <th width="20%">Name</th>
                    <th width="30%">Description</th>
                    <th width="20%">Under category</th>
                    <th width="20%">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
                @foreach($sub_category_list as $category)
                    <?php $i++;?>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$category->sub_cat_name}}</td>
                    <td>{{$category->sub_cat_desc}}</td>
                    <td>
                        @foreach($all_category as $main_category)
                            @if($main_category->id==$category->cat_id)
                             {{$main_category->cat_name}}
                          @endif
                        @endforeach
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('/edit-sub-category/'.$category->id)}}"><i class="fa fa-edit"></i>Edit</a>
                        <a class="btn btn-danger" href="{{url('/delete-sub-category/'.$category->id)}}"><i class="fa fa-trash-o"></i>Delete </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection