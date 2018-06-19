@extends('frontend.front_view.front_master')
@section('page-title','Contact Form')
@section('main_content')
    <div class="container">
        <header class="page-header">
            <h1 class="page-title">Contact Us</h1>
        </header>
        <div class="row">
            <div class="col-md-9">
                <p class="lead">Lacus dolor placerat rutrum facilisi tempus mauris aenean sociis neque platea metus eros cum diam tellus facilisi ultricies lectus curae curabitur quam libero viverra nam vitae phasellus lectus primis lectus</p>
            </div>
        </div>
        <div class="gap gap-small"></div>
        <div class="row" data-gutter="60">
            <div class="col-md-5">
                <h3 class="widget-title">Leave a Message</h3>
                <p class="text-muted">Class conubia id magna cursus conubia proin venenatis suscipit aliquet massa dui odio velit ultrices augue luctus lorem placerat tortor</p>
                <p class="text-center alert-success">{{Session::get('message_success')}}</p>
                <p class="text-center  alert-danger">{{Session::get('message_error')}}</p>
                {!! Form::open(['method'=>'POST','url'=>'save-contact-form']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name"/>
                                @if ($errors->has('name'))
                                    <div class="error">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" name="email" />
                                @if ($errors->has('email'))
                                    <div class="error">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control" type="text" name="subject"/>
                                @if ($errors->has('subject'))
                                    <div class="error">{{ $errors->first('subject') }}</div>
                                @endif

                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="message"></textarea>
                        @if ($errors->has('message'))
                            <div class="error">{{ $errors->first('message') }}</div>
                        @endif
                    </div>
                    <input class="btn btn-primary" type="submit" value="Send a Message" />
               {!! Form::close() !!}
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="widget-title">Usa</h3>
                        <ul class="contact-list">
                            <li>
                                <h5>Email</h5><a href="#">usa@thebox.com</a>
                            </li>
                            <li>
                                <h5>Phone Number</h5>
                                <p>+1-202-555-0191</p>
                            </li>
                            <li>
                                <h5>Skype</h5>
                                <p>TheBoxUs</p>
                            </li>
                            <li>
                                <h5>Address</h5><address>795 Folsom Ave, Suite 600<br />San Francisco, CA 94107</address>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="widget-title">France</h3>
                        <ul class="contact-list">
                            <li>
                                <h5>Email</h5><a href="#">fr@thebox.com</a>
                            </li>
                            <li>
                                <h5>Phone Number</h5>
                                <p>+01-77-44-48-34</p>
                            </li>
                            <li>
                                <h5>Skype</h5>
                                <p>TheBoxFr</p>
                            </li>
                            <li>
                                <h5>Address</h5><address>46, Square de la Couronne<br />91120 PALAISEAU</address>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="widget-title">Italy</h3>
                        <ul class="contact-list">
                            <li>
                                <h5>Email</h5><a href="#">it@thebox.com</a>
                            </li>
                            <li>
                                <h5>Phone Number</h5>
                                <p>+09451-52-19-40</p>
                            </li>
                            <li>
                                <h5>Skype</h5>
                                <p>TheBoxIt</p>
                            </li>
                            <li>
                                <h5>Address</h5><address>Via Francesco Saverio Nitti, 28<br />Roma, 00156</address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gap gap-small"></div>
    @endsection