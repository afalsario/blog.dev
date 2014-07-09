@extends('layouts.blog-master')

@section('topscript')
    <link rel="stylesheet" type="text/css" href="/css/pagedown.css">
    <script type="text/javascript" src="/js/Markdown.Converter.js"></script>
    <script type="text/javascript" src="/js/Markdown.Sanitizer.js"></script>
    <script type="text/javascript" src="/js/Markdown.Editor.js"></script>
@stop

@section('content')
    <div class="container">
        <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-left">
            @if (isset($post))
                <h2 class="subtitle">Edit Post</h2>
                {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'files' => true, 'method' => 'PUT')) }}
            @else
                <h2 class="subtitle">Create a new post</h2>
                {{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
            @endif

            <h3>{{ Form::label('title', 'Title') }}</h3>
                {{ Form::text('title') }}<br>
                {{ $errors->first('title', '<span class="help-block">:message</span></br>') }}

            <h3>{{ Form::label('body', 'Body') }}</h3>

            <div class="wmd-panel">
                <div id="wmd-button-bar"></div>
                {{ Form::textarea('body', null, array('class' => 'wmd-input', 'id' => 'wmd-input')) }}
                <br>
            </div>
            {{ $errors->first('body', '<span class="help-block">:message</span></br>') }}

            <hr>

            <h2 class="subtitle">Post Preview</h2>
            <div id="wmd-preview" class="wmd-panel wmd-preview"></div>

            <h3>Upload Image</h3>

            {{ Form::file('image') }}
            <br>
            {{ Form::submit('Save Post', ['class' => 'btn btn-md btn-primary']) }}
            {{ Form::close() }}
            <br>
        </div>
    </div>

    <script type="text/javascript">
        (function () {
            var converter1 = Markdown.getSanitizingConverter();

            var editor1 = new Markdown.Editor(converter1);

            editor1.run();
        })();
    </script>

@stop






