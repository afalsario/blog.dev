@extends('layouts.blog-master')

@section('topscript')
<link href="/css/journal-bootstrap.min.css" rel="stylesheet" type="text/css">
@stop

@section('content')

<div class="container">
    <h2>{{{ $post->title }}}</h2>
    <h5 class="text">Author: {{{ $post->user->email }}}</h5>
    <h5 class="text">{{{ $post->created_at->format('l, F jS Y @ h:i A') }}}</h5>
    <hr>
    <p class="lead"> {{{ $post->body }}} </p>

    @if ($post->img_path)

    <img src="{{{ $post->img_path }}}" class="img-responsive">
    @endif
<br>
    <a href="{{ action('PostsController@edit', $post->id) }}"><button type="button" class="btn btn-link">Edit</button></a>
    <button type="button" class="btn btn-link">{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
        {{ Form::submit('Delete') }}</button>
    {{ Form::close() }}

</div>
@stop
