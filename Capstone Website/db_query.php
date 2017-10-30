<?php

	define("HOST", "localhost");

	// Database user
	define("DBUSER", "username");

	// Database password
	define("PASS", "password");

	// Database name
	define("DB", "database_name");

	// Database Error - User Message
	define("DB_MSG_ERROR", 'Could not connect!<br />Please contact the site\'s administrator.');

	############## Make the mysql connection ###########

	$conn = mysql_connect(HOST, DBUSER, PASS) or die(DB_MSG_ERROR);

	$db = mysql_select_db(DB) or die(DB_MSG_ERROR);


	$query = mysql_query("
	  SELECT * 
	  FROM persons 
	  WHERE age='".$_POST['value']."'
	");

	echo '<table>';

	while ($data = mysql_fetch_array($query)) {

	  echo '
	  <tr style="background-color:pink;">
		<td style="font-size:18px;">'.$data["name"].'</td>
		<td style="font-size:18px;">'.$data["age"].'</td>
	  </tr>';

	}

	echo '</table>';

?>
