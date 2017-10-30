<?php
			 $assetdb = mysqli_connect('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		if (mysqli_connect_errno()) {
			echo '<h3>Database Access Error!</h3>';
		}else{	 
			 			  $keyword = $_POST['keyword'];
						  
						  $columnAmount = mysqli_query($assetdb, "SELECT * FROM `CapstoneDB`.`$keyword` ; ");
						  $max = 0;
						  for($i = 0; $i < mysqli_num_fields($columnAmount); $i++) {
								//$field_info = mysqli_fetch_field($result);
								$max = $i+1;
							}
													 
							//$row = mysqli_fetch_assoc($columnAmount);
							//echo $row['count'];
			  
			  
			  
			 // while($i < $row){
					echo "<script type='text/javascript'>alert('$keyword');</script>";
					//$i++;
			 // }
			  
			  
			  
						
			   
			   $columnOne 		=  isset($_POST['column0']) ? $_POST['column0'] : '';
				$columnTwo 		=  isset($_POST['column1']) ? $_POST['column1'] : '';
				$columnThree 	=  isset($_POST['column2']) ? $_POST['column2'] : '';
				$columnFour 		=  isset($_POST['column3']) ? $_POST['column3'] : '';
				$columnFive 		=  isset($_POST['column4']) ? $_POST['column4'] : '';
				$columnSix 		=  isset($_POST['column5']) ? $_POST['column5'] : '';
				$columnSeven 	=  isset($_POST['column6']) ? $_POST['column6'] : '';
				$columnEight 		=  isset($_POST['column7']) ? $_POST['column7'] : '';
				$columnNine 		=  isset($_POST['column8']) ? $_POST['column8'] : '';
				$columnTen 		=  isset($_POST['column9']) ? $_POST['column9'] : '';
				
				
				 if($max == 1){
					 $query = "INSERT INTO `$keyword` VALUES ('$columnOne')";
				 }
				 
				 elseif($max == 2){
					 $query = "INSERT INTO `$keyword` VALUES ('$columnOne, $columnTwo')";
				 }
							
				elseif($max == 3){
					 $query = "INSERT INTO `$keyword` VALUES ('$columnOne', '$columnTwo', '$columnThree')";
				 }
				elseif($max == 4){
					$query = "INSERT INTO `$keyword` VALUES ('$columnOne', '$columnTwo', '$columnThree', '$columnFour')";
				}
				
				elseif($max == 5){
					$query = "INSERT INTO `$keyword` VALUES ('$columnOne', '$columnTwo', '$columnThree', '$columnFour', '$columnFive')";
				}
				
				elseif($max == 6){
					$query = "INSERT INTO `$keyword` VALUES ('$columnOne', '$columnTwo', '$columnThree', '$columnFour', '$columnFive', '$columnSix')";
				}
				
				elseif($max == 7){
					$query = "INSERT INTO `$keyword` VALUES ('$columnOne', '$columnTwo', '$columnThree', '$columnFour', '$columnFive', '$columnSix', '$columnSeven')";
				}
				
				elseif($max == 8){
					$query = "INSERT INTO `$keyword` VALUES ('$columnOne', '$columnTwo', '$columnThree', 
					'$columnFour', '$columnFive', '$columnSix', '$columnSeven', '$columnEight')";
				}
				
				elseif($max == 9){
					$query = "INSERT INTO `$keyword` VALUES ('$columnOne', '$columnTwo', '$columnThree',
								'$columnFour', '$columnFive', '$columnSix', '$columnSeven', '$columnEight', '$columnNine')";
				}
				
				elseif($max == 10){
					$query = "INSERT INTO `$keyword` VALUES ('$columnOne', '$columnTwo', '$columnThree',
								'$columnFour', '$columnFive', '$columnSix', '$columnSeven', '$columnEight', '$columnNine', '$columnTen')";
				}
				//$result = mysqli_query($assetdb, $query);
						
				
				
					//$assetdb->query($select);
					if(mysqli_query($assetdb, $query)){
						$message = "Inserted";
						echo "<script type='text/javascript'>alert('$message');</script>";
					} 
					else{
						$message = "Not Inserted";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
						
						
						//$stmt->close();
						$assetdb->close();
				
		}
	?>




