<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
	include "dbconnect.php";
	
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$name = trim($_POST['name']);
	$description = trim($_POST['description']);
	$dosage = trim($_POST['dosage']);
	$time = trim($_POST['time']);

	$insert_sql = "INSERT INTO meds (email, password, name, description, dose, time) VALUES ('$email', '$password', '$name', '$description', '$dosage', '$time')";
	
	echo "query: " . $insert_sql;
	//insert user into database
	mysql_query($insert_sql, $con)
		or die(mysql_error());
	header('Location: sqlinfo.html');
	exit();
?>
</body>
</html>