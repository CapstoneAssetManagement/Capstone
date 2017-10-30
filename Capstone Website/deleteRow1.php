<?php
			 $assetdb = mysqli_connect('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		if (mysqli_connect_errno()) {
			echo '<h3>Database Access Error!</h3>';
		}else{	 
			 			  $keyword = $_POST['keyword'];
						  $array = array();
						  $columnAmount = mysqli_query($assetdb, "SELECT * FROM `CapstoneDB`.`$keyword` ; ");
						  $max = 0;
						  for($i = 0; $i < mysqli_num_fields($columnAmount); $i++) {
								$field_info = mysqli_fetch_field($columnAmount);
								$max = $i+1;
								$array[] =  $field_info->name;
							}

			   $columnOne 		=  isset($_POST['column0']) ? $_POST['column0'] : '';
				$columnTwo 		=  isset($_POST['column1']) ? $_POST['column1'] : '';
				$columnThree 	=  isset($_POST['column2']) ? $_POST['column2'] : '';
				
					$query = "DELETE FROM CapstoneDB.`$keyword` WHERE `".$array[0]."`= '$columnOne' 
						AND `".$array[1]."`= '$columnTwo' AND `".$array[2]."`= '$columnThree' ;";
				
						
				
				echo "<script type='text/javascript'>alert('$query');</script>";
				
					if(mysqli_query($assetdb, $query)){
						$message = "Row Deleted";
						echo "<script type='text/javascript'>alert('$message');</script>";
					} 
					else{
						$message = "Row not deleted<br> Make sure you entered the information in correctly";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}

						$assetdb->close();
				
		}
	?>




