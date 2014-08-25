@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">My
                        <strong>Portfolio</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <a href="http://commonart-sa.com"><img class="img-responsive img-border-left" src="/img/commonart-home.png" alt=""></a>
                </div>
                <div class="col-md-6">
                    <h3>CommonArt</h3>
                    <p><a href="http://commonart-sa.com">CommonArt</a> is a web application for artists in San Antonio to display their art and connect with the community. The web application features a clean user interface for artists where they can easily sign-up and edit a personal profile. We have also made uploading and editing photos and information quick and easy. People interested in local art are then able to search through our artists’ galleries by keyword, media, or price, and then contact the individual artist for information on items for sale. The application was built using Laravel, PHP, MYSQL, JavaScript, jQuery, and Twitter Bootstrap. Development was done in a Vagrant environment. We implemented version control using Git and GitHub.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">More
                        <strong>Work</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <a href="http://ashleyfalsario.com/whack"><img class="img-responsive port" src="/img/whack-a-mole.png" alt=""></a>
                    <h3>Laser Time
                        <small>JavaScript</small>
                    </h3>
                    <p>This is a JavaScript game based on my previous laser hair removal career. Turn up the volume for more fun!</p>
                    @include('layouts.partials.whack-modal')
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive port" src="/img/address.png" alt="">
                    <h3>Address Book
                        <small>PHP and MySQL</small>
                    </h3>
                    <p>This application can be used to keep track of contacts by name, phone number, and address.</p>
                    @include('layouts.partials.address-modal')
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive port" src="/img/todo.png" alt="">
                    <h3>ToDo List
                        <small>PHP, MySQL, Twitter Bootstrap</small>
                    </h3>
                    <p>This ToDo list can be used to add new items, remove finished items, upload whole lists, and save lists for future use.</p>
                    @include('layouts.partials.todo-modal')
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->
@stop
