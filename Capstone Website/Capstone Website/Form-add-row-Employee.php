<?php
			 $assetdb = mysqli_connect('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		if (mysqli_connect_errno()) {
			echo '<h3>Database Access Error!</h3>';
		}else{	 
			 			  
			   if(isset($_POST['employee_id'])){
				  
				   
				
				 // $assetTag = "";
				
				$employee_id 	= isset($_POST['employee_id']) ? $_POST['employee_id'] : '';
				$employee_name= isset($_POST['employee_name']) ? $_POST['employee_name'] : '';
				$department 		= isset($_POST['department']) ? $_POST['department'] : '';
				$start_date 		= isset($_POST['start_date']) ? $_POST['start_date'] : '';
				$admin 				= isset($_POST['admin']) ? $_POST['admin'] : '';
				$salary 				= isset($_POST['salary']) ? $_POST['salary'] : '';
				
				
				$select = "INSERT INTO `CapstoneDB`.`Employees` (`Employee ID`, `Employee Name`, `Department`, `Start_Date`, `Admin`, `Salary`) 
					VALUES ('$employee_id', '$employee_name', '$department', '$start_date', '$admin', '$salary');";
			
				
					//$assetdb->query($select);
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




