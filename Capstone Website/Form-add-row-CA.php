<?php
		$assetdb = mysqli_connect('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		if (mysqli_connect_errno()) {
			echo '<h3>Database Access Error!</h3>';
		}else{	 
			 			  
			   if(isset($_POST['assetTag'])){
				  
				   
				
				 // $assetTag = "";
				
				$assetTag 			= isset($_POST['assetTag']) ? $_POST['assetTag'] : '';
				$employee 			= isset($_POST['employee']) ? $_POST['employee'] : '';
				$datePurchased 	= isset($_POST['datePurchased']) ? $_POST['datePurchased'] : '';
				$serialNumber 	= isset($_POST['serialNumber']) ? $_POST['serialNumber'] : '';
				$quantity 			= isset($_POST['quantity']) ? $_POST['quantity'] : '';
				$description 		= isset($_POST['description']) ? $_POST['description'] : '';
				
				
				$select = "INSERT INTO CapstoneDB.`Computer Assets` (`Asset Tag`, `Employee Name`, `Serial Number`, `Date Purchase`, `Amount Left`, `Description`) 
					VALUES ('$assetTag', '$employee', '$serialNumber', '$datePurchased', '$quantity', '$description')";
					
							
					//$assetdb->query($select);
					if(mysqli_query($assetdb, $select)){
						$message = "inserted";
						echo "<script type='text/javascript'>alert('$message');</script>";
						
					} 
					else{
						$message = "Not inserted";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
						
						
						//$stmt->close();
						$assetdb->close();
				 }  else{
					$message = "heeeeere";
						echo "<script type='text/javascript'>alert('$message');</script>";
				}  
		}
	?>




