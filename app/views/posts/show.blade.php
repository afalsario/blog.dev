@extends('layouts.blog-master')

@section('topscript')
<link href="/css/journal-bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  <style>
    p
    {
        font-family: Wire One;
        font-size: 40px;
    }
    </style>

@stop

@section('content')

    <div class="container">
        <h2 class="subtitle">{{{ $post->title }}}</h2>
        <div class="post-info">
        <h5 class="text">Author: {{{ $post->user->first_name . " " . $post->user->last_name }}}</h5>
        <h5 class="text">{{{ $post->updated_at->format('F jS, Y g:i A') }}}</h5>
      </div>
        <br>

    @if(Auth::check())
        <div class="auth-btns">
            <a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-md btn-primary">Edit</a>
            <a href="#" class="deletePost btn btn-md btn-primary" data-postid="{{ $post->id }}">Delete</a>
        </div>
            {{ Form::open(array('action' => 'PostsController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
            {{ Form::close() }}
    @endif
</div>
    <div class="body container">

        @if ($post->img_path)
            <img src="{{{ $post->img_path }}}" class="img-responsive">
        @endif

        <p class="lead"> {{ $post->renderBody() }} </p>
    </div>

    <script type="text/javascript">
       $(".deletePost").click(function() {
           var postId = $(this).data('postid');
           $("#deleteForm").attr('action', '/posts/' + postId);
           if(confirm("Are you sure you want to delete post")) {
               $('#deleteForm').submit();
           }
       });
    </script>

@stop

