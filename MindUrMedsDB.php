<!DOCTYPE html>
<html> 
<head>
	<title>Demo of MySQL access via PHP</title> 
	<meta http-equiv = "content-type" content= "text/html; charset = utf-8" />
</head>
<body>
	<h1>Welcome -- PHP + MySQL Demo</h1>
	<?php
		$db_user = 'sunnyba1_gwc3';
		$db_password = 'SIP2016-c';
		$db_host = 'localhost'; 
		$db_name = 'sunnyba1_gwc3';


		echo "<p>Connecting to MySQL server.</p>";
		$dbc = mysql_connect ($db_host, $db_user, $db_password)
				OR die ('Could not connect to MySQL:' .mysql_error() );
		echo "<p>Connecting to database</p>";
		mysql_select_db ($db_name)
				OR die ('Could not select the database: ' . mysql_error() );
		echo "<p>Create a table.</p>";
		$create_table_string_user = "CREATE TABLE user (user_id int unsigned not null auto_increment primary key, firstname text not null, lastname text not null,  email text not null, password text not null)";
		mysql_query ($create_table_string_user, $dbc)
				OR die ("Can't create the table: " . mysql_error() );
		$create_table_string_meds = "CREATE TABLE meds (email text not null, password text not null, name text not null, description text not null, dose text not null, time text not null)";
		mysql_query($create_table_string_meds, $dbc)
			OR die ("Can't create the table: " . mysql_error() );

		echo ("<i>$table</i> table created succesfully.");
	?>
</body>
</html>