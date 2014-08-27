@extends('layouts.master')

@section('content')
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Ashley Falsario</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <img class="img-responsive img-full" src="/img/map.png">
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>210.319.8669</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:a_falsario@yahoo.com">a_falsario@yahoo.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>782 Crestway Drive
                            <br>San Antonio, TX 78239</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>Thanks for browsing my site! If you have any questions for me, please fill out the form below. I look forward to speaking with you!</p>
                    {{ Form::open(array('url' => 'contact'))}}

                        <ul class='errors'>
                            @foreach($errors->all('<li>:message</li>') as $message)
                            {{ $message }}
                            @endforeach
                        </ul>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', Input::old('first_name'), ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group col-lg-4">
                                {{ Form::label('email', 'Email Address') }}
                                {{ Form::email('email', Input::old('email'), ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group col-lg-4">
                                {{ Form::label('phone', 'Phone Number') }}
                                {{ Form::text('phone', Input::old('phone'), ['class' => 'form-control']) }}
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                {{ Form::label('message', 'Message') }}
                                {{ Form::textarea('message', Input::old('message'), ['class' => 'form-control', 'rows' => '6'])}}
                            </div>
                            <div class="form-group col-lg-12">
                                {{ Form::reset('Reset', ['class' => 'btn btn-default']) }}
                                {{ Form::submit('Submit', ['class' => 'btn btn-default']) }}
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
@stop
   
