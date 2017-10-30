<?php
		
		
		
		$assetdb = new mysqli('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		
		if (mysqli_connect_errno()) {
			echo 'Database Access Error!';
			echo 'problem: ' . mysqli_connect_errno();
		} else {
			
			
			
			//$select = " SELECT * FROM `Computer Assets`";
			//$value = $_POST['value'];
			//$_SESSION['X'] = (string) $_POST['value']; 
			$query = "SELECT * FROM `".$_POST['value']."`";
			//$result = $assetdb->query( $select ); 
			
			//$query = "SELECT * FROM `Computer Assets`";
						$result = mysqli_query($assetdb, $query);
						
						 echo "<table class='table table-hover table-bordered' id='data-table' onclick=' tableHighlight(); findRow(); ' >";
						echo "<thead>";
							for($i = 0; $i < mysqli_num_fields($result); $i++) {
								$field_info = mysqli_fetch_field($result);
								echo "<th>{$field_info->name}</th>";
							}
							echo "</thead>";
							// Print the data
							while($row = $result->fetch_row()) {
								echo "<tr>";
								foreach($row as $_column) {
									echo "<td>{$_column}</td>";
								}
								echo "</tr>";
							}
							echo '</table>';
				
				
				
			$assetdb->close();
}

		
?>