<?php

	$db_user = "sunnyba1_gwc3";
	$db_password = "SIP2016-c";
	$db_host = "localhost";
	$db_name = "sunnyba1_gwc3";
	
	$con = mysql_connect($db_host, $db_user, $db_password)
		OR die ('could not connect to MySQL: '. mysql_error());
	mysql_select_db ($db_name)
				OR die ('Could not select the database: ' . mysql_error() );

?>