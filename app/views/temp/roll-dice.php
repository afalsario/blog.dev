<html>
<head>
	<title></title>
</head>
<body>

The random number is : <?= $rand_num; ?>
<br>

<?php
if($guess == $rand_num)
{
	echo "Good guess!";
}
else
{
	echo "Guess again.";
}
?>

</body>
</html>
