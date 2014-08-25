<?php

$name = Input::get('name');
$email = Input::get('email');
$phone = Input::get('phone');
$message = Input::get('message');

?>
<h1>We've got mail!</h1>

<p>
Name: <?php echo ($name); ?> <br>
Email: <?php echo ($email); ?> <br>
Phone Number: <?php echo ($phone); ?> <br>
Message: <?php echo ($message); ?> <br>
</p>