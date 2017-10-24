<?php
			 $assetdb = mysqli_connect('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		if (mysqli_connect_errno()) {
			echo '<h3>Database Access Error!</h3>';
		}else{	 
						
				$employee_id 	= isset($_POST['employee_id']) ? $_POST['employee_id'] : '';
				
				
				$select = "DELETE FROM `CapstoneDB`.`Employees` WHERE `Employee ID` = '$employee_id'; ";
			
				
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




