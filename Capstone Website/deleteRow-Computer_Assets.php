<?php
			 $assetdb = mysqli_connect('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		if (mysqli_connect_errno()) {
			echo '<h3>Database Access Error!</h3>';
		}else{	 
				
				$assetTag 			= isset($_POST['assetTag']) ? $_POST['assetTag'] : '';				
				
				$select = "DELETE FROM `CapstoneDB`.`Computer Assets` WHERE `Asset Tag` = '$assetTag'; ";
		
				
					//$assetdb->query($select);
					if(!mysqli_query($assetdb, $select)){
						$message = "Row not deleted";
						echo "<script type='text/javascript'>alert('$message');</script>";
					} 
					else{
						$message = "Row Deleted <br> refresh page to update table";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
						$assetdb->close();
		}  
?>




