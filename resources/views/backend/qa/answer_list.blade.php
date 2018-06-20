@extends('backend.admin_master')
@section('page_title','Answer LIST')
@section('admin_content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Answer LIST</strong>
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
                        <th width="90%">Answer</th>
                        <th width="5%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0;?>
                    @foreach($a_list as $a)
                        <?php $i++;?>
                        <tr>
                            <td>{{$i}}</td>

                            <td>{{$a->answer}}</td>
                            <td>
                                <a class="btn btn-danger" href="{{url('/delete-answer/'.$a->id.'/'.$question_id)}}"><i class="fa fa-trash-o"></i>Delete </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection