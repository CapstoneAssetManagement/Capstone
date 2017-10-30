<?php

	$assetdb = new mysqli('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		
		if (mysqli_connect_errno()) {
			echo 'Database Access Error!';
			echo 'problem: ' . mysqli_connect_errno();
		}else{
		
			if(isset($_POST['value'])){
				$keyword = $_POST['value'];

				$query = " SELECT * FROM `CapstoneDB`.`Employees` WHERE `Employee ID` LIKE '%" . $keyword ."%'
														
								UNION
																					
								SELECT * FROM `CapstoneDB`.`Employees` WHERE `Employee Name` LIKE '%" . $keyword ."%'
																					
								UNION
																					
								SELECT * FROM `CapstoneDB`.`Employees` WHERE `Department` LIKE '%" . $keyword ."%'
																					
								UNION
																					
								SELECT * FROM `CapstoneDB`.`Computer Assets` WHERE `Asset Tag` LIKE '%" . $keyword ."%'
																					
								UNION
																					
								SELECT * FROM `CapstoneDB`.`Computer Assets` WHERE `Employee Name` LIKE '%" . $keyword ."%'
																					
								UNION
																					
								SELECT * FROM `CapstoneDB`.`Computer Assets` WHERE `Serial Number` LIKE '%" . $keyword ."%'
								
								UNION
																					
								SELECT * FROM `CapstoneDB`.`Software` WHERE `Software Name` LIKE '%" . $keyword ."%'
																					
								UNION
																				
								SELECT * FROM `CapstoneDB`.`Software` WHERE `Software Asset Number` LIKE '%" . $keyword ."%'; ";		

													
				//$result = $assetdb->query($query) or die($assetdb->error);									
													
													
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
			}else{
				$message = "Search cannot be empty, please enter in a string";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
	}

?>