@extends('layouts.master')

@section('content')

<nav class="mainmenu">
    <div class="container">
        <div class="dropdown">
            <button type="button" class="navbar-toggle" data-toggle="dropdown"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
<!--                 <li><a href="#head" class="active">Hello</a></li> -->
                <li><a href="#about">About me</a></li>
                <li><a href="#themes">Portfolio</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#contact">Get in touch</a></li>
                <li><a class="dpdn" href="http://ashleyfalsario.com/posts">Blog</a></li>
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
                <h3 class="tagline">Thank you for browsing my site. There are links to my social media profiles and samples of my work.</h3>
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
                    <img src="/img/address.png" alt="Address Book">
                    <div class="caption">
                        <h3>Address Book</h3>
                        <p>This ToDo list can be used to add new items, remove finished items, upload whole lists, and save lists for future use.</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal1">Source</a>
                            <a href="http://codeup.dev/contacts.php" class="btn btn-default" role="button" target="_blank">View</a>
                        </p>
                            <!-- beginmodal -->
                            <div class="modal fade bs-example-modal-lg" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="myModalLabel">PHP and HTML Code</h4>
                                        </div>
                                        <div class="modal-body">
<!-- beginning address code -->
<pre>
class InvalidInputException extends Exception{}

//-------------1. Establish DB Connection
$dbc = new PDO('mysql:host=127.0.0.1;dbname=address_book', 'ashley', 'password');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try
{
    if(!empty($_POST['new_name']) && !empty($_POST['new_number']))
    {
        $stmt = $dbc->prepare('INSERT INTO contact (first_name, phone_number) VALUES (:new_name, :new_number)');
        $stmt->bindValue(':new_name', htmlspecialchars(strip_tags($_POST['new_name'])), PDO::PARAM_STR);
        $stmt->bindValue(':new_number', htmlspecialchars(strip_tags($_POST['new_number'])), PDO::PARAM_STR);
        $stmt->execute();
    }
    else
    {
        throw new InvalidInputException("Please enter valid data");
    }

}
catch (InvalidInputException $e)
{
    $e->getMessage();
}

$limit = 10;
$offset = 0;

//preparing data from the table so that it shows a limit of items and an offset for pagination
$query = 'SELECT * FROM contact LIMIT :limit OFFSET :offset';
$stmt = $dbc->prepare($query);
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

//-------------5. Query for todos on current page.
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
&lthtml>
&lthead>
    &lttitle>Address Book&lt/title>
    &ltlink rel="stylesheet" href="/css/bootstrap.min.css">
    &ltlink rel="stylesheet" href="/css/address.css">
&lt/head>
&ltbody>
    &ltdiv class="container">
        &lth2>Address Book&lt/h2>
        &lttable class="table table-striped">
            &ltth>Id&lt/th>
            &ltth>Name&lt/th>
            &ltth>Phone Number&lt/th>
            &ltth>Actions&lt/th>
            &lt? foreach($contacts as $contact):?>
                &lttr>
                    &lttd>&lt?= $contact['con_id'] ?>&lt/td>
                    &lttd>&lt?= $contact['first_name'] ?>&lt/td>
                    &lttd>&lt?= $contact['phone_number'] ?>&lt/td>
                    &lttd>
                        &ltbutton class="btn btn-primary">View&lt/button>
                        &ltbutton class="btn btn-danger">Remove&lt/button>
                    &lt/td>
                &lt/tr>
            &lt? endforeach; ?>
        &lt/table>
    &lt/div>
    &ltdiv>
        &lth2>Add New Contact&lt/h2>
        &lt? if(isset($e)): ?>
        &lt?= $e->getMessage(); ?>
        &lt? endif; ?>
        &ltform method="POST">
            &ltinput type="text" name="new_name" id="new_name" placeholder="Name">
            &ltinput type="text" name="new_number" id="new_number" placeholder="Phone Number">
            &ltbutton type="submit" class="btn btn-success">Add Contact&lt/button>
        &lt/form>
    &lt/div>

&lt/body>
&lt/html>
</pre>
<!-- end address book code -->
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
                    <img src="/img/todo.png" alt="Todo List">
                    <div class="caption">
                        <h3>Todo List</h3>
                        <p>This ToDo list can be used to add new items, remove finished items, upload whole lists, and save lists for future use.</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal2">Source</a>
                            <a href="http://todo.dev/new_todo.php" class="btn btn-default" role="button" target="_blank">View</a>
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
                    <img src="/img/whack-a-mole.png" alt="">
                    <div class="caption">
                        <h3>Laser Time</h3>
                        <p>This is a little bit of a twist on the classic whack-a-mole game. It was written using HTML, CSS, JavaScript, and jQuery.</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal3">Source</a>
                            <a href="http://codeup.dev/whack.php" class="btn btn-default" role="button" target="_blank">View</a>
                        </p>
                            <!-- beginmodal -->
                            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="myModalLabel">JavaScript/jQuery Code</h4>
                                        </div>
                                        <div class="modal-body">
<!-- beginning whack js -->
<pre>&ltscript>
    var gameTime = 60;
    var score = 0;
    console.log(score);

    var random;
    var randDiv;
    var mole;
    var gameOn;
    var delay = 1000;

    $('#gameOn').click(function(event){

        gameOn =  setInterval(function(){

            random = Math.round(Math.random()*8);
            randDiv = $('.box').eq(random).click();
            mole = $('.mole')[random];

            $(mole).fadeIn(200).delay(delay).fadeOut(400);

            console.log(mole);

            $(mole).on('click', function(){
                $(this).fadeOut();
            });

        }, 2000);

        $('img').on('click', function(){
            $('#score').html(score += 1);
            switch(score){
                case 3: delay = 800;
                break;
                case 8: delay = 400;
                break;
                case 15: delay = 100;
                break;
            }
        });

        continueGame();
    });

    function levelTwo(){
        delay = 100;
    }

    function gameOver(){
        clearInterval(gameOn);
        $('#box').addClass('gameover').html('&ltp>GAME OVER&lt/p>').css('border', 'none');
        $('#gameOn').click(function() {
            location.reload();
        });
    }

    function continueGame(){
        setTimeout(function(){
            gameTime--;
            $('#timer').html(gameTime);

            if (gameTime > 0) {
                continueGame();
            } else {
                gameOver();
            }
        }, 1000);
    }
&lt/script></pre>
<!-- ending whack js -->
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
                    <img src="/img/blog.png" alt="">
                    <div class="caption">
                        <h3>Blog Site</h3>
                        <p>This is a personal blog site created with the Laravel framework. I used HTML and CSS with Twitter Bootstrap for styling.</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#myModal4">Source</a>
                        </p>
                        <!-- beginmodal -->
                        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">HTML Site</h4>
                                    </div>
                                    <div class="modal-body">
<!-- beginning blog code -->
<pre>&ltnav class="mainmenu">
    &ltdiv class="container">
        &ltdiv class="dropdown">
            &ltbutton type="button" class="navbar-toggle" data-toggle="dropdown">
                &ltspan class="icon-bar">&lt/span>
                &ltspan class="icon-bar">&lt/span>
                &ltspan class="icon-bar">&lt/span>
            &lt/button>
            &ltul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                &ltli>&lta href="#head" class="active">Hello&lt/a>&lt/li>
                &ltli>&lta href="#about">About me&lt/a>&lt/li>
                &ltli>&lta href="#themes">Portfolio&lt/a>&lt/li>
                &ltli>&lta href="#resume">Resume&lt/a>&lt/li>
                &ltli>&lta href="#contact">Get in touch&lt/a>&lt/li>
            &lt/ul>
        &lt/div>
    &lt/div>
&lt/nav>

&lt!-- Main (Home) section -->
&ltsection class="section" id="head">
    &ltdiv class="container">
        &ltdiv class="row">
            &ltdiv class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">
                &lth1 class="title">Ashley Falsario&lt/h1>
                &lth2 class="subtitle">Web Developer&lt/h2>
                &lth3 class="tagline">
                    Aesthetician turned Web Developer
                    &ltbr>
                    Writing Beautiful Code
                &lt/h3>
                &ltp>Thank you for browsing my site. There are links to my social...&lt/p>
            &lt/div> &lt!-- /col -->
        &lt/div> &lt!-- /row -->
    &lt/div>
&lt/section>

&lt!-- Second (About) section -->
&ltsection class="section" id="about">
    &ltdiv class="container">
        &lth2 class="text-center title">About me&lt/h2>
        &ltdiv class="row">
            &ltdiv class="col-sm-4 col-sm-offset-2">
                &lth5>&ltstrong>Who is Ashley?&ltbr>&lt/strong>&lt/h5>
                &ltp>I am artsy and I am crafty. I can be a little goofy and I love live music...&lt/p>
                &ltp>I also enjoy getting out and into San Antonio and Austin. I have very rec...&lt/p>
            &lt/div>
            &ltdiv class="col-sm-4">
                &lth5>&ltstrong>Why does she code?&ltbr>&lt/strong>&lt/h5>
                &ltp>I am currently a student in Codeup, an intense 12 week programming bootcamp...&lt/p>
                &lth5>&ltstrong>Author links&ltbr>&lt/strong>&lt/h5>
                &lta href="https://twitter.com/_falsario">Twitter&lt/a> /
                &lta href="www.linkedin.com/in/ashleyfalsario/">LinkedIn&lt/a> /
                &lta href="https://github.com/afalsario">Github&lt/a>&lt/p>
            &lt/div>
        &lt/div>
    &lt/div>
&lt/section>

&lt!-- Third (Works) section -->
&ltsection class="section" id="themes">
    &ltdiv class="container">
        &lth2 class="text-center title">Portfolio&lt/h2>
        &ltp class="lead text-center">
            Thank you for taking the time to browse my code!&ltbr>
            These are some of the projects I worked on during my time in Codeup.
        &lt/p></pre>
<!-- end blog code -->
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
            <h2 class="text-center title">Ashley Falsario <small>Full Stack Web Developer</small></h2>
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

<section class="section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">
                <h1 class="title">Blog</h1>
            </div>
        </div>
    </div>
</section>

@stop
