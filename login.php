<?php
	session_start();
	include "dbconnect.php";

	if (!isset($_SESSION['user_id'])) {
		if(isset($_POST['email'])) {
			$username = trim($_POST['email']);
			$password = trim($_POST['password']);
			
			//look up user
			$user_query = sprintf("SELECT user_id, email, password FROM user WHERE email = '%s' AND password = '%s'", $username, $password);
			
			$results = mysql_query($user_query, $con);
						
			if (mysql_num_rows($results) == 1) {
				$result = mysql_fetch_array($results,$con);
				$user_id = $result['user_id'];
				//setcookie('user_id', $user_id);
				$_SESSION['user_id'] = $user_id;
				$_SESSION['username'] = $result['email'];
				/* if (!isset($_SESSION['user_id'])) {
					echo "session: " . $_SESSION['user_id'];
				} else { */
				header('Location: /home.html');
				exit();
				//}
			} else {
				$errormessage = "Incorrect email/username or password";
				exit($errormessage . " Click back and try again.");
			}
		}
	} else {
		
	header('Location: http://www.fcps.edu/LakeBraddockSS/'); //redirect to home page
	}

?>