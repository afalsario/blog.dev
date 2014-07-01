@extends('layouts.master')

@section('content')

@foreach ($posts as $post)
{{{ $post->title }}}
<hr>
{{{ $post->body }}}
@endforeach

@stop
