<?php
		
		
		
		$assetdb = new mysqli('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		
		if (mysqli_connect_errno()) {
			echo 'Database Access Error!';
			echo 'problem: ' . mysqli_connect_errno();
		} else {
			
			
			
			//$select = " SELECT * FROM `Computer Assets`";
			//$value = $_POST['value'];
			//$_SESSION['X'] = (string) $_POST['value']; 
			$select = "SELECT * FROM `".$_POST['value']."`";
			//$result = $assetdb->query( $select ); 
			
			 $result = $assetdb->query($select) or die($assetdb->error);	

			 echo "<table class='table table-hover table-bordered' id='data-table' onClick= tableHighlight()' >";
				 echo "<thead>";
					$row2 = $result->fetch_assoc();
					foreach($row2 as $col => $value){
						echo "<th>";
						echo $col;
						echo "</th>";
					}
				echo "</thead>"; 
				
				echo "<tbody>";
				$i = 0;
				while($row = $result->fetch_array()){  #fix this shit sometime, its horrendous
					echo "<tr><td>" 	. $row[$i++] 	. "</td><td>" 
											. $row[$i++]  	. "</td><td>"
											. $row[$i++] 	. "</td><td>"
											. $row[$i++] 	. "</td><td>"
											. $row[$i++]  . "</td><td>"
											. $row[$i] 		.	"</tr>";
											$i = 0;
									
				}
				echo "</tbody>";
				echo "</table>";
				
				
				
			$assetdb->close();
}

		
?>