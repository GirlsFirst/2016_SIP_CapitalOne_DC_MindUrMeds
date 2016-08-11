<?php
//connect to database
//add user_id column
include "dbconnect.php";

$firstname = trim($_POST['first']);
$lastname = trim($_POST['last']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);


$insert_sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

echo "query: " . $insert_sql;
//insert user into database
mysql_query($insert_sql, $con)
	or die(mysql_error());

//redirect user to "home page"
header('Location: /home.html');
//. mysql_insert_id()
exit();

?>