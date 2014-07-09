@extends('layouts.blog-master')

@section('topscript')
<link href="/css/journal-bootstrap.min.css" rel="stylesheet" type="text/css">
@stop

@section('content')

    <div class="container">
        <h2 class="subtitle">Blog Posts</h2>
        <table class="table" style="margin:20">
            <tr>
                <th>Title</th>
                <th>Creation Date</th>
                <th></th>
            </tr>

            @foreach ($posts as $post)
                <tr>
                    <td class="lead">{{{ $post->title }}} </td>
                    <td>{{{ $post->created_at->format('l jS \of F Y h:i:s A') }}}</td>
                    <td>
                        <a href="{{ action('PostsController@show', $post->id) }}"><button class="btn btn-primary">View</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
<div class="text-center">
            {{ $posts->links() }}

</div>
    </div>
@stop
