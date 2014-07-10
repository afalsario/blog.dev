@extends('layouts.blog-master')

@section('content')
    <div class="center">
        <h2 class="subtitle">Profile Info</h2>
        First Name: {{{ Auth::user()->first_name }}}
        <br>
        Last Name: {{{ Auth::user()->last_name }}}
        <br>
        Email: {{{ Auth::user()->email }}}
        <br>
    </div>

<!-- {{ Form::text('first_name') }}<br>
    {{ $errors->first('first_name', '<span class="help-block">:message</span></br>') }}
       {{ Form::text('last_name') }}<br>
    {{ $errors->first('last_name', '<span class="help-block">:message</span></br>') }}
    {{ Form::submit('Update', ['class' => 'btn btn-md btn-primary']) }}
    {{ Form::close() }} <br> -->
@stop
