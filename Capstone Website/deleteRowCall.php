<?php

	$assetdb = new mysqli('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		
		if (mysqli_connect_errno()) {
			echo 'Database Access Error!';
			echo 'problem: ' . mysqli_connect_errno();
		}else{
			session_start();
			//if(isset($_POST['value'])){
				$keyword = $_POST['value'];
				
	
				//$message = "Search cannot be empty, please enter in a string";
				
				$query = " SELECT * FROM `CapstoneDB`.`$keyword` ;";		

													
				//$result = $assetdb->query($query) or die($assetdb->error);									
													
													
				//$query = "SELECT * FROM `Computer Assets`";
						$result = mysqli_query($assetdb, $query);
						
						$x = 0;
							echo "<form action='deleteRow1.php' method='post'>";
							echo"<input type='hidden' name='keyword' value='".$keyword."'>";
							for($i = 0; $i < mysqli_num_fields($result); $i++) {
								$field_info = mysqli_fetch_field($result);
								if($i > 2){
									 "<input type='hidden'  name='column".$x."'><br>";
								}else{
									echo $field_info->name. "<input type='text'  name='column".$x."'><br>";
								}
								$x++;
							}
							echo "<button name='ok-button' type='submit' >OK</button>";
							echo "<button name='cancel-button' type='button' onClick='window.close()'>Cancel</button>";
							echo "</form>";
						
							
							
					
					
				$assetdb->close();
			//}else{
			//	$message = "Search cannot be empty, please enter in a string";
			//	echo "<script type='text/javascript'>alert('$message');</script>";
			//}
	}

?>