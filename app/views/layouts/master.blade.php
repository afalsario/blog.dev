<!doctype html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/journal-bootstrap.min.css">

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    @yield('topcontent')
</head>

<body>
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Ashley Falsario</a>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Resume</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact Me<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://github.com/afalsario">Github</a></li>
                        <li><a href="http://www.linkedin.com/in/ashleyfalsario/">LinkedIn</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </li>
            </ul>
        </div>
</div>

    @yield('content')

    @yield('bottomcontent')

</body>
</html>
