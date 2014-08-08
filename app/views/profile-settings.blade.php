@extends('layouts.blog-master')

@section('topscript')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
@stop

@section('content')

    <div class="container">
        <h2 class="subtitle">Profile Info</h2>
        {{ Form::label('first_name', 'First Name') }}<br>
        {{ Form::text('first_name', Auth::user()->first_name) }}<br>
        {{ $errors->first('first_name', '<span class="help-block">:message</span></br>') }}
        {{ Form::label('last_name', 'Last Name') }}<br>
        {{ Form::text('last_name', Auth::user()->last_name) }}<br>
        {{ $errors->first('last_name', '<span class="help-block">:message</span></br>') }}
        {{ Form::label('email', 'Email') }}<br>
        {{ Form::text('email', Auth::user()->email) }}<br>
        {{ $errors->first('email', '<span class="help-block">:message</span></br>') }}
        <br>
        {{ Form::submit('Update', ['class' => 'btn btn-md btn-primary']) }}
        {{ Form::close() }} <br>
    </div>

@stop
