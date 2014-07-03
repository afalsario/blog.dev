@extends('layouts.master')

@section('content')


{{{ $post->title }}}
<br>
{{{ $post->created_at->format('l, F jS Y @ h:i A') }}}
<hr>
{{{ $post->body }}}

{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
    {{ Form::submit('Delete') }}
{{ Form::close() }}

@stop
