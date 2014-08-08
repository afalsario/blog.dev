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

        <!-- Removing the hover color change from the welcome message -->
        <style>
            .navbar-inverse .navbar-nav>li>a#welcome:hover, .navbar-inverse .navbar-nav>li>a:focus
            {
                color: #fff;
            }

            div.body
            {
                margin-right: auto;
                margin-left: auto;
                padding-left: 15px;
                padding-right: 15px;
                clear:both;
                background-color: rgba(242, 210, 188, .5);
                border: 1px solid whitesmoke;
            }
        </style>

    </head>

    <!-- include navigation bar -->
    @include('layouts.partials.navbar')

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

        @yield('bottomscript')

    </body>
</html>
