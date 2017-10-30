<?php
			 $assetdb = mysqli_connect('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		if (mysqli_connect_errno()) {
			echo '<h3>Database Access Error!</h3>';
		}else{	
			 if(isset($_POST['deleteTableName'])){
				 $tablename 	= isset($_POST['deleteTableName']) ? $_POST['deleteTableName'] : '';
				 
				 
				$select = "DROP TABLE $tablename";
		
				
					//$assetdb->query($select);
					if(mysqli_query($assetdb, $select)){
						$message = "Table  dropped <br> refresh page to update menu" ;
						echo "<script type='text/javascript'>alert('$message');</script>";
					} 
					else{
						$message = "Table not dropped";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
						$assetdb->close(); 
			 }
		
		
		}
		
?>