@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-left">
        @if (isset($post))
            <h2 class="subtitle">Edit Post</h2>
            {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
        @else
            <h2 class="subtitle">Create a new post</h2>
            {{ Form::open(array('action' => 'PostsController@store')) }}
        @endif

        <h3>{{ Form::label('title', 'Title') }}</h3>
        {{ Form::text('title') }}<br>
        {{ $errors->first('title', '<span class="help-block">:message</span></br>') }}

        <h3>{{ Form::label('body', 'Body') }}</h3>
        {{ Form::textarea('body') }}<br>
        {{ $errors->first('body', '<span class="help-block">:message</span></br>') }}

    {{ Form::submit('Save Post') }}
    {{ Form::close() }}
    </div>
</div>
@stop
