<?php
//connect to database
setcookie('user_id', '', time()-(365*24*60*60));
setcookie('username', '', time()-(365*24*60*60));

header('Location: index.php');

?>

other protected content

if((!isset($_COOKIE['user_id'])) || (!strlen($_COOKIE['user_id']) > 0)) {
	header("Location: http://gwc3.sunny-banana.com/myindex.php);