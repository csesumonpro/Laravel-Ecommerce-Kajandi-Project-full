@extends('backend.admin_master')
@section('page_title','Message List')
@section('admin_content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Contact Message List Table</strong>
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
                        <th width="15%">Name</th>
                        <th width="20%">Email</th>
                        <th width="20%">Subject</th>
                        <th width="20%">Message</th>
                        <th width="20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0;?>
                    <?php
                        $all_contact = DB::table('contact_forms')->orderBy('id','desc')->get();
                    ?>
                    @foreach($all_contact as $contact)
                        <?php $i++;?>
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>
                                {!! \Illuminate\Support\Str::words($contact->subject, 10,'....')  !!}
                            </td>
                            <td>
                                {!! \Illuminate\Support\Str::words($contact->message, 5,'....')  !!}

                            </td>

                            <td>
                                @if($contact->status=='unread')
                                <a class="btn btn-primary" href="{{url('/view-contact-message/'.$contact->id)}}"><i class="fa fa-info"></i></a>
                               @else
                                    <a class="btn btn-info" href="{{url('/view-contact-message/'.$contact->id)}}"><i class="fa fa-info"></i></a>
                                    @endif
                                <a class="btn btn-success" href="{{url('/replay-contact-message/'.$contact->id)}}"><i class="fa fa-reply"></i></a>
                                <a class="btn btn-danger" href="{{url('/delete-contact-message/'.$contact->id)}}"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection