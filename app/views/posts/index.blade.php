@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Blog Posts</h2>
        <table>
            <tr>
                <th>Title</th>
                <th>Creation Date</th>
            </tr>

            @foreach ($posts as $post)
                <tr>
                    <td>{{{ $post->title }}} </td>
                    <td>{{{ $post->created_at->format('l jS \of F Y h:i:s A') }}}</td>
                    <td>
                        <a href="{{ action('PostsController@edit', $post->id) }}"><button>Edit</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $posts->links() }}

        {{ Form::open(array('action' => 'PostsController@index', 'method' => 'get')) }}
        {{ Form::text('search')}}
        <button type="submit">Submit</button>
        {{ Form::close() }}

    </div>
@stop
