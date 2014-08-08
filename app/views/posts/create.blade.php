@extends('layouts.master')

@section('content')

<h2>Create a new post</h2>

<form action="{{{ action('PostsController@store') }}}" method="POST">
    <label for="post_title">Title</label>
    <br>
    <input type="text" id="post_title" name="post_title" value="{{{ Input::old('post_title') }}}">
    <br>
    <label for="content">Content</label>
    <br>
    <textarea id="content" name="content">{{{ Input::old('content') }}}</textarea>
    <br>
    <input type="submit">
</form>

@stop
