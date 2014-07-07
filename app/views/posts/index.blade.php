@extends('layouts.blog-master')

@section('topscript')
<link href="/css/journal-bootstrap.min.css" rel="stylesheet" type="text/css">
@stop

@section('content')

<form class="navbar-form navbar-left" role="search">
  <div class="form-group">
    {{ Form::open(array('action' => 'PostsController@index', 'method' => 'get')) }}
        {{ Form::text('search')}}
        {{ Form::submit('Search', ['class' => 'btn btn-primary btn-sm']) }}
        {{ Form::close() }}
  </div>
</form>


    <div class="container">
        <h2>Blog Posts</h2>
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
        {{ $posts->links() }}

        

    </div>
@stop
