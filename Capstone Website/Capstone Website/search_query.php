<?php

	define("HOST", "capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com");

	// Database user
	define("DBUSER", "MasterUser");

	// Database password
	define("PASS", "Change.17");

	// Database name
	define("DB", "CapstoneDB");

	// Database Error - User Message
	define("DB_MSG_ERROR", 'Could not connect!<br />Please contact the site\'s administrator.');

	############## Make the mysql connection ###########

	$conn = mysql_connect(HOST, DBUSER, PASS) or die(DB_MSG_ERROR);

	$db = mysql_select_db(DB) or die(DB_MSG_ERROR);


	$query = mysql_query("SELECT * FROM CapstoneDB.`Computer Assets` WHERE `Asset Tag` = '" . $_POST['value'] . "';
		
		SELECT * FROM CapstoneDB.`Employees` WHERE `Employee Name` = '" . $_POST['value'] . "';
		
		SELECT * FROM CapstoneDB.`Software` WHERE `Software Asset Number` ='" . $_POST['value'] . "';

		");		

	echo '<table>';
	$i=0;
	while ($data = mysql_fetch_array($query)) {

	 echo "<tr><td>" 	. $row[$i++] 	. "</td><td>" 
								. $row[$i++]  . "</td><td>"
								. $row[$i++] 	. "</td><td>"
								. $row[$i++] 	. "</td><td>"
								. $row[$i++]  . "</td><td>"
								. $row[$i] 		.	"</tr>";
								$i=0;
	}

	echo '</table>';

?>