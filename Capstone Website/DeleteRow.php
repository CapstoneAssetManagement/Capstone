<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>add-button-template</title>
<link rel="stylesheet" href="Form-add-row.css">
<!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>

	// function openCity(evt, tab) {
		//Declare all variables
		// var i, tabcontent, tablinks;

		//Get all elements with class="tabcontent" and hide them
		// tabcontent = document.getElementsByClassName("tabcontent");
		// for (i = 0; i < tabcontent.length; i++) {
			// tabcontent[i].style.display = "none";
		// }

		//Get all elements with class="tablinks" and remove the class "active"
		// tablinks = document.getElementsByClassName("tablinks");
		// for (i = 0; i < tablinks.length; i++) {
			// tablinks[i].className = tablinks[i].className.replace(" active", "");
		// }

		//Show the current tab, and add an "active" class to the button that opened the tab
		// document.getElementById(tab).style.display = "block";
		// evt.currentTarget.className += " active";
	// }
	
	function deleteRowCall(tableName){
		 var value = tableName;
		 
		   $.post("deleteRowCall.php",{value:value}, function(data){
			 $("#container2").html(data);
		   });
		   return false;
	}
	
	</script>

</head>

<body>

	<div class="tab">
	
	 <?php
				 $assetdb = new mysqli('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB') or die("Database error");
				 $select = 'SHOW TABLES';
				 $result = $assetdb->query($select);
				 while($table = $result->fetch_array()){
						echo "<button class='tablinks' onclick='deleteRowCall(\"$table[0]\")'>" . $table[0] . "</button>";
				 }
		 ?> 
	
	
	</div>
	
	<div id="container2">
			
	
	</div>
	
	
	
		
</body>
</html>
