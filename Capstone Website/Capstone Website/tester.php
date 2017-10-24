
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
				
				
				$select = "INSERT INTO CapstoneDB.`Computer Assets` (`Asset Tag`, Employee, `Serial Number`, `Date Purchase`, `Amount Left`, `Description`) 
					VALUES ($assetTag, $employee, $serialNumber, $datePurchased, $quantity, $description)";
					
				
				 /* $assetTag = $_POST['assetTag'] ?? '';
				   $employee = $_POST['employee'];
				   $serialNumber = $_POST['serialNumber'];
				   $dateBox = $_POST['datePurchased'];
				   $quantity = $_POST['quantity'];
				   $description = $_POST['description'];  
				    */
				    /* $stmt = $assetdb->prepare( "INSERT INTO CapstoneDB.`Computer Assets` (`Asset Tag`, Employee, `Serial Number`, `Date Purchase`, `Amount Left`, Description) 
					VALUES (?,?,?,?,?,?);");
				   $stmt->bind_param("isidis", $assetTag, $employee, $serialNumber, $dateBox, $quantity, $description);
				$stmt->execute();  */
			
				
				
					$assetdb->query($select);
					if(!mysqli_query($assetdb, $select)){
						$message = "Not inserted";
						echo "<script type='text/javascript'>alert('$message');</script>";
					} 
					else{
						$message = "Inserted";
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




