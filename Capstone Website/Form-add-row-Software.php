
		<?php
			 $assetdb = mysqli_connect('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		if (mysqli_connect_errno()) {
			echo '<h3>Database Access Error!</h3>';
		}else{	 
			 			  
			   if(isset($_POST['software'])){
				  
				   
				
				 // $assetTag = "";
				
				$software 			= isset($_POST['software']) ? $_POST['software'] : '';
				$assetNumber 	= isset($_POST['software_asset_number']) ? $_POST['software_asset_number'] : '';
				$datePurchased 	= isset($_POST['datePurchased']) ? $_POST['datePurchased'] : '';
				$downloaded 		= isset($_POST['downloaded']) ? $_POST['downloaded'] : '';
				$license 			= isset($_POST['license']) ? $_POST['license'] : '';
				$expiration_date = isset($_POST['expiration_date']) ? $_POST['expiration_date'] : '';
				
				
				$select = "INSERT INTO CapstoneDB.Software (`Software Name`, `Software Asset Number`, `Date Purchased`, `Date Downloaded`, `License`, `Expiration Date`) 
					VALUES ('$software', '$assetNumber', '$datePurchased', '$downloaded', '$license', '$expiration_date')";
								
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




