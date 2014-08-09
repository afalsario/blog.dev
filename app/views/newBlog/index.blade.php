@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="/img/blog-slide1.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="/img/art-slide2.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="/img/class-slide3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <!-- <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2> -->
                    <br>
                    <h1 class="brand-name">Web Development</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Ashley Falsario</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Who is
                        <strong>Ashley?</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="/img/me.webp" alt="">
                    <hr class="visible-xs">
                    <p>My name is Ashley Falsario. I code.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">What I can do 
                        <strong>for you</strong>
                    </h2>
                    <hr>
                    <p>I can write PHP.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
@stop

@section('bottomscript')

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

@stop
