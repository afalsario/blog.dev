@extends('layouts.blog-master')

@section('topscript')
<link href="/css/journal-bootstrap.min.css" rel="stylesheet" type="text/css">
@stop

@section('content')

    <div class="container">
        <h2 class="subtitle">Blog Posts</h2>

        @foreach ($users as $user)
            <div class="blog-post">
                <h2 class="lead"><a href="{{ action('PostsController@show', $post->id) }}">{{{ $post->title }}}</a></h2>
                <p>by <a href="#">{{{ $user->first_name . '  ' . $user->last_name }}}</a></p>
                    <hr>
                <p><span class="glyphicon glyphicon-time"></span> {{{ $post->updated_at->format('F jS, Y g:i A') }}}</p>
                    <hr>
                <p>{{{ $post->preview() }}}</p>
                <a class="btn btn-primary" href="{{ action('PostsController@show', $post->id) }}">
                    Read More
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <br>
        @endforeach

        <div class="text-center">
            {{ $posts->links() }}
        </div>
    </div>

@stop




