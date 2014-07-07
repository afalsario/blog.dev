<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Ashley Falsario</title>

    <link rel="shortcut icon" href="/img/gt_favicon.png">

    <!-- Bootstrap itself -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="/css/magister.css">
    <link href="/css/journal-bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
    @yield('topscript')
</head>

@if(Auth::check())
    <div class="user">Logged in as <span class="text-primary">{{ Auth::user()->email }}</span></div>
    {{ link_to_action('PostsController@create', 'Create Post')}}
    {{ link_to_action('HomeController@logout', 'Logout') }}
@else
    {{ link_to_action('HomeController@login', 'Login') }}
@endif

<body class="theme-invert">
    <div class="container">
        @if(Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if(Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
    </div>
    @yield('content')

    @yield('bottomcontent')

</body>
</html>
