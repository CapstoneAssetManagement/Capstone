<?php

	mysql_connect('host', 'user', 'pass');
	mysql_select_db ("database");

	$sql = "SELECT year FROM data";
	$result = mysql_query($sql);

	echo "<select name='year'>";
	while ($row = mysql_fetch_array($result)) {
		echo "<option value='" . $row['year'] . "'>" . $row['year'] . "</option>";
	}
	echo "</select>";

?>
