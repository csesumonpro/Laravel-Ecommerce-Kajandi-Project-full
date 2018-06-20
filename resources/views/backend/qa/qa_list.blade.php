@extends('backend.admin_master')
@section('page_title','Customer Q & A LIST')
@section('admin_content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Customer Q & A LIST</strong>
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
                        <th width="70%">Question</th>
                        <th width="25%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0;?>
                    @foreach($qa_list as $qa)
                        <?php $i++;?>
                        <tr>
                            <td>{{$i}}</td>

                            <td>{{$qa->question}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{url('/view-qa/'.$qa->id)}}"><i class="fa fa-info"></i>Viw All ANS</a>
                                <a class="btn btn-danger" href="{{url('/delete-qa/'.$qa->id)}}"><i class="fa fa-trash-o"></i>Delete </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection