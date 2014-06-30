@extends('layouts.master')

@section('topscript')
<style>
.table {
    width: 80%;
    margin-bottom: 21px;
    margin-left: auto;
    margin-right: auto;
    background: rgba(242, 210, 188, .5);
}

h2>small{
    color:white;
}
</style>
@stop

@section('content')

<nav class="mainmenu">
    <div class="container">
        <div class="dropdown">
            <button type="button" class="navbar-toggle" data-toggle="dropdown"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!-- <a data-toggle="dropdown" href="#">Dropdown trigger</a> -->
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a href="#head" class="active">Hello</a></li>
                <li><a href="#about">About me</a></li>
                <li><a href="#themes">Portfolio</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#contact">Get in touch</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- Main (Home) section -->
<section class="section" id="head">

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">

                <!-- Site Title, your name, HELLO msg, etc. -->
                <h1 class="title">Ashley Falsario</h1>
                <h2 class="subtitle">Web Developer</h2>

                <!-- Short introductory (optional) -->
                <h3 class="tagline">
                    Aesthetician turned Web Developer<br>
                    Writing Beautiful Code
                </h3>
                <!-- Nice place to describe your site in a sentence or two -->
                <p>Thank you for browsing my site. There are links to my social media profiles and samples of my work.</p>
            </div> <!-- /col -->
        </div> <!-- /row -->
    </div>
</section>

<!-- Second (About) section -->
<section class="section" id="about">
    <div class="container">

        <h2 class="text-center title">About me</h2>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-2">
                <h5><strong>Who is Ashley?<br></strong></h5>
                <p>I am artsy and I am crafty. I can be a little goofy and I love live music. When I am not coding or chasing my two year old, I love to create jewelry. I have recently been learning how to metalsmith. I get to play with sheet metal and a torch. It's awesome!</p>
                <p>I also enjoy getting out and into San Antonio and Austin. I have very recently discovered how fun fishing is and I am looking forward to catching my first fish. No luck yet. If you've got any suggestions, please send them my way! </p>
            </div>
            <div class="col-sm-4">
                <h5><strong>Why does she code?<br></strong></h5>
                <p>I am currently a student in Codeup, an intense 12 week programming bootcamp. The class is challenging in the best of ways. Prior to my deep dive into code, I was an Aesthetician at Clarify in Stone Oak. The change is as drastic as it sounds. Learning to code has not been easy but I love the rush that comes from finally getting that code to run beautifully. Writing a code from scratch is like piecing together a puzzle. When the pieces are separated they look like nothing important or even an uninviting mess. But all of the pieces are right there infront of you and when you get them all in their proper places, you have a beautiful work of art that everyone can admire and enjoy. That is why I code.</p>
                <h5><strong>Author links<br></strong></h5>
                <p><a href="/resume.html">Resume</a> / <a href="https://twitter.com/_falsario">Twitter</a> / <a href="www.linkedin.com/in/ashleyfalsario/">LinkedIn</a> / <a href="https://github.com/afalsario">Github</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Third (Works) section -->
<section class="section" id="themes">
    <div class="container">

        <h2 class="text-center title">Portfolio</h2>
        <p class="lead text-center">
            Thank you for taking the time to browse my code!<br>
            These are some of the projects I worked on during my time in Codeup.
        </p>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-2">
                <div class="thumbnail">
                    <img src="/img/download.png" alt="Address Book">
                    <div class="caption">
                        <h3>Address Book</h3>
                        <p>This ToDo list can be used to add new items, remove finished items, upload whole lists, and save lists for future use.</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal1">Source</a>
                            <a href="#" class="btn btn-default" role="button">View</a>
                        </p>
                            <!-- beginmodal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            Address Code
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- endmodal -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="/img/download.png" alt="Todo List">
                    <div class="caption">
                        <h3>Todo List</h3>
                        <p>This ToDo list can be used to add new items, remove finished items, upload whole lists, and save lists for future use.</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target=".bs-example-modal-lg">Source</a>
                            <a href="#" class="btn btn-default" role="button">View</a>
                        </p>
                        <!-- beginmodal -->
                        <div class="modal fade bs-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">PHP Code</h4>
                                    </div>
                                    <div class="modal-body">
<!-- todo code begining -->
<pre>
$items_per_page = 5;

class InvalidInputException extends Exception{}

function getOffset($items_per_page)
{
    $page = isset($_GET['page'])? $_GET['page'] : 1;
    return ($page - 1) * $items_per_page;
}

//-------------1. Establish DB Connection
$dbc = new PDO('mysql:host=127.0.0.1;dbname=todo_db', 'ashley', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try
{
//-------------2. Check if something was posted
    if(isset($_POST['new_item']))
    {
        //-------------a. Is item being added? => Add todo!
        if((strlen($_POST['new_item']) != 0 && (strlen($_POST['new_item'])) <= 240))
        {
            $stmt = $dbc->prepare('INSERT INTO todo_list (todo) VALUES (:todo)');
            $stmt->bindValue(':todo', htmlspecialchars(strip_tags($_POST['new_item'])), PDO::PARAM_STR);
            $stmt->execute();
        }
        else
        {
            throw new InvalidInputException("Error! Please enter a todo longer than 0 characters and less than 240");
        }
    }
    //-------------b. Is item being removed? => Remove it! As a post
    if(isset($_POST['remove_id']))
    {
        $dbc->query('DELETE FROM todo_list WHERE id = ' . $_POST['remove_id']);
    }
}
catch (InvalidInputException $e)
{
    $e->getMessage();
}

 if(isset($_POST['reset']))
    {
        $dbc->query('TRUNCATE TABLE todo_list;');
    }

//-------------3. Query DB for total todo count.
$count = $dbc->query('SELECT count(*) FROM todo_list')->fetchColumn();
//divides the count by the items/page to determine total pages and show the proper pagination links
$numPages = ceil($count / $items_per_page);

//-------------4. Determine pagination values.
$page = isset($_GET['page'])?$_GET['page']: 1;
$previous_page = $page - 1;
$next_page = $page + 1;

//preparing data from the table so that it shows a limit of items and an offset for pagination
$query = 'SELECT * FROM todo_list LIMIT :limit OFFSET :offset';
$stmt = $dbc->prepare($query);
$stmt->bindValue(':limit', $items_per_page, PDO::PARAM_INT);
$stmt->bindValue(':offset', getOffset($items_per_page), PDO::PARAM_INT);
$stmt->execute();

//-------------5. Query for todos on current page.
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
</pre>
<!-- todo code end -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- endmodal -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-2">
                <div class="thumbnail">
                    <img src="/img/download.png" alt="">
                    <div class="caption">
                        <h3>Coming Soon!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal3">Source</a>
                            <a href="#" class="btn btn-default" role="button">View</a>
                        </p>
                            <!-- beginmodal -->
                            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            Whack-a-mole Code
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- endmodal -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="/img/download.png" alt="">
                    <div class="caption">
                        <h3>Coming Soon!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal4">Source</a>
                            <a href="#" class="btn btn-default" role="button">View</a>
                        </p>
                        <!-- beginmodal -->
                        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        blog Code
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- endmodal -->
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Fourth (Contact) section -->
<section class="section" id="contact">
    <div class="container">

        <h2 class="text-center title">Get in touch</h2>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <p class="lead">Feel free to email me, or contact me on Twitter!</p>
             <hr>
                <ul class="list-inline list-social">
                    <li><a href="https://twitter.com/_falsario" class="btn btn-link"><i class="fa fa-twitter fa-fw"></i> Twitter</a></li>
                    <li><a href="https://github.com/afalsario" class="btn btn-link"><i class="fa fa-github fa-fw"></i> Github</a></li>
                    <li><a href="http://linkedin.com/in/ashleyfalsario/" class="btn btn-link"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a></li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- Fifth (Resume) section -->
<section class="section" id="resume">
    <div class="container" style="margin:20" >
        <div>
            <h2 class="text-center title">Ashley Falsario <small>Junior Software Developer</small></h2>
        </div>
        <div>
            <table class="table">
                <tbody>
                    <tr>
                        <th>Contact</th>
                        <td>Ashley Falsario</td>
                        <td>a_falsario@yahoo.com</td>
                        <td>
                            <a href="http://linkedin.com/in/ashleyfalsario/">LinkedIn</a>
                            <br>
                            <a href="http://github.com/afalsario">GitHub</a>
                        </td>
                    </tr>

                    <tr>
                        <th>Work Experience</th>
                        <td>Aesthetician<br>Clarify</td>
                        <td>May 2011 - Present</td>
                        <td><a href="http://clarifysa.com">Clarify</a></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Cashier<br>AAFES</td>
                        <td>May 2009 - May 2011</td>
                        <td><a href="http://aafes.com">AAFES</a></td>
                    </tr>

                    <tr>
                        <th>Education</th>
                        <td>LAMP+J Software Development Bootcamp<br>Codeup</td>
                        <td>May - July 2014</td>
                        <td><a href="http://codeup.com">Codeup</a></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Esthiology<br>Milan Institute of Cosmetology</td>
                        <td>2011</td>
                        <td><a href="http://www.milaninstitute.edu/campuses/milan-institute-of-cosmetology/san-antonio-windcrest-texas-campus/">Milan</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@stop


@section('bottomcontent')

<!-- Load js libs only when the page is loaded. -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="/js/modernizr.custom.72241.js"></script>
<!-- Custom template scripts -->
<script src="/js/magister.js"></script>

@stop
