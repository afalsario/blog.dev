@extends('layouts.master')

@section('content')
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">The
                        <strong>Blog</strong>
                    </h2>
                    <hr>
                </div>
                
                <div class="col-lg-12 text-center">
                    @if ($post->img_path)
                        <img src="{{{ $post->img_path }}}" class="img-responsive">
                    @else
                        <img class="img-responsive img-border img-full" src="/img/slide-1.jpg" alt="">
                    @endif
                    
                    <h2><a href="{{ action('PostsController@show', $post->slug) }}">{{{ $post->title }}}</a>
                        <br>
                        <small>{{{ $post->updated_at->format('F jS, Y g:i A') }}}</small>
                    </h2>
                    <p>{{ $post->renderBody() }}</p>
                    
                    <hr>
                </div>
              
            </div>
        </div>

    </div>
    <!-- /.container -->

@stop