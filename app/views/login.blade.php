@extends('layouts.blog-master')

@section('topscript')
    <link href="/css/journal-bootstrap.min.css" rel="stylesheet" type="text/css">
@stop

@section('content')
    <div class="center">
        <h2 class="subtitle">Log In</h2>
        <h5 class="text">Email</h5>
        <div>
            {{ Form::open(array('action' => 'HomeController@doLogin'))}}
            {{ Form::text('email') }}
        </div>
        <h5 class="text">Password</h5>
        <div>
            {{ Form::password('password') }}
            <div class="checkbox">
                <label>
                    <input type="checkbox">Remember Me
                </label>
            </div>
        </div>
        <div class="form-group">
            {{ Form::submit('Log In', ['class' => 'btn btn-primary']) }}
        </div>
        {{ Form::close() }}
    </div>
@stop
