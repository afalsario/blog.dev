<?php

$name = Input::get('name');
$email = Input::get('email');
$phone = Input::get('phone');
$message = Input::get('message');

?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>We've got mail!</h2>

        <div>
            <p>
                Name: <?php echo ($name); ?> <br>
                Email: <?php echo ($email); ?> <br>
                Phone Number: <?php echo ($phone); ?> <br>
                Message: <?php echo ($message); ?> <br>
            </p>
        </div>
    </body>
</html>
