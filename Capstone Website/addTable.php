<?php
			 $assetdb = mysqli_connect('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
		if (mysqli_connect_errno()) {
			echo '<h3>Database Access Error!</h3>';
		}else{	 
			 			  
			   if(isset($_POST['addTableName'])){
				  
				   $one = false;
				   $two = false;
				   $three = false;
				   $four = false;
				   $five = false;
				   $six = false;
				   $seven = false;
				   $eight = false;
				   $nine = false;
				   $ten = false;
				
				 // $assetTag = "";
				
				$tableName = isset($_POST['addTableName']) ? $_POST['addTableName'] : '';
				
				$columnOne 		=  isset($_POST['column1']) ? $_POST['column1'] : '';
				$columnTwo 		=  isset($_POST['column2']) ? $_POST['column2'] : '';
				$columnThree 	=  isset($_POST['column3']) ? $_POST['column3'] : '';
				$columnFour 		=  isset($_POST['column4']) ? $_POST['column4'] : '';
				$columnFive 		=  isset($_POST['column5']) ? $_POST['column5'] : '';
				$columnSix 		=  isset($_POST['column6']) ? $_POST['column6'] : '';
				$columnSeven 	=  isset($_POST['column7']) ? $_POST['column7'] : '';
				$columnEight 		=  isset($_POST['column8']) ? $_POST['column8'] : '';
				$columnNine 		=  isset($_POST['column9']) ? $_POST['column9'] : '';
				$columnTen 		=  isset($_POST['column10']) ? $_POST['column10'] : '';
				
				if(!empty($_POST['checkBox1'])) {
					foreach($_POST['checkBox1'] as $selected1){
						$one = true;
					}
				}
				
				if(!empty($_POST['checkBox2'])) {
					foreach($_POST['checkBox2'] as $selected2){
						$one = false;
						$two = true;
					}
				}
				
				if(!empty($_POST['checkBox3'])) {
					foreach($_POST['checkBox3'] as $selected3){
						$two = false;
						$three = true;
					}
				}
				
				if(!empty($_POST['checkBox4'])) {
					foreach($_POST['checkBox4'] as $selected4){
						$three = false;
						$four = true;
					}
				}
				
				if(!empty($_POST['checkBox5'])) {
					foreach($_POST['checkBox5'] as $selected5){
						$four = false;
						$five = true;
					}
				}
				
				if(!empty($_POST['checkBox6'])) {
					foreach($_POST['checkBox6'] as $selected6){
						$five = false;
						$six = true;
					}
				}
					
				if(!empty($_POST['checkBox7'])) {	
					foreach($_POST['checkBox7'] as $selected7){
						$six = false; 
						$seven = true;

					}
				}
				
				if(!empty($_POST['checkBox8'])) {
					foreach($_POST['checkBox8'] as $selected8){
						$seven = false;
						$eight = true;
					}
				}
				
				if(!empty($_POST['checkBox9'])) {
					foreach($_POST['checkBox9'] as $selected9){
						$eight = false;
						$nine = true;
					}
				}
				
				if(!empty($_POST['checkBox10'])) {
					foreach($_POST['checkBox10'] as $selected10){
						$nine = false;
						$ten = true;
					}
				}
				
				
				
				if($one){
					$query = "CREATE TABLE CapstoneDB.`$tableName` (
						`$columnOne` 	$selected1
					)";
				}
				
				elseif($two){
					$query = "CREATE TABLE CapstoneDB.`$tableName` (
						`$columnOne` 	$selected1,
						`$columnTwo` 	$selected2
					)";
				}
					
				if($three){
					$query = "CREATE TABLE CapstoneDB.`$tableName` (
						`$columnOne` 	$selected1,
						`$columnTwo` 	$selected2,
						`$columnThree` 	$selected3
					)";
				}
				
				if($four){
					$query = "CREATE TABLE CapstoneDB.`$tableName` (
						`$columnOne` 	$selected1,
						`$columnTwo` 	$selected2,
						`$columnThree` 	$selected3,
						`$columnFour` 	$selected4
					)";
				}
				
				if($five){
					$query = "CREATE TABLE CapstoneDB.`$tableName` (
						`$columnOne` 	$selected1,
						`$columnTwo` 	$selected2,
						`$columnThree` 	$selected3,
						`$columnFour` 	$selected4,
						`$columnFive` 	$selected5
					)";
				}
				
				if($six){
					$query = "CREATE TABLE CapstoneDB.`$tableName` (
						`$columnOne` 	$selected1,
						`$columnTwo` 	$selected2,
						`$columnThree` 	$selected3,
						`$columnFour` 	$selected4,
						`$columnFive` 	$selected5,
						`$columnSix` 	$selected6
					)";
				}
				
				if($seven){
					$query = "CREATE TABLE CapstoneDB.`$tableName` (
						`$columnOne` 	$selected1,
						`$columnTwo` 	$selected2,
						`$columnThree` 	$selected3,
						`$columnFour` 	$selected4,
						`$columnFive` 	$selected5,
						`$columnSix` 	$selected6,
						`$columnSeven` $selected7
					)";
				}
				
				if($eight){
					$query = "CREATE TABLE CapstoneDB.`$tableName` (
						`$columnOne` 	$selected1,
						`$columnTwo` 	$selected2,
						`$columnThree` 	$selected3,
						`$columnFour` 	$selected4,
						`$columnFive` 	$selected5,
						`$columnSix` 	$selected6,
						`$columnSeven` $selected7,
						`$columnEight` 	$selected8
					)";
				}
				
				if($nine){
					$query = "CREATE TABLE CapstoneDB.`$tableName` (
						`$columnOne` 	$selected1,
						`$columnTwo` 	$selected2,
						`$columnThree` 	$selected3,
						`$columnFour` 	$selected4,
						`$columnFive` 	$selected5,
						`$columnSix` 	$selected6,
						`$columnSeven` $selected7,
						`$columnEight` 	$selected8,
						`$columnNine` 	$selected9
					)";
				}
				
				if($ten){
					$query = "CREATE TABLE CapstoneDB.`$tableName` (
						`$columnOne` 	$selected1,
						`$columnTwo` 	$selected2,
						`$columnThree` 	$selected3,
						`$columnFour` 	$selected4,
						`$columnFive` 	$selected5,
						`$columnSix` 	$selected6,
						`$columnSeven` $selected7,
						`$columnEight` 	$selected8,
						`$columnNine` 	$selected9,
						`$columnTen` 	$selected10
					)";
				}
			
				
				
					//$assetdb->query($query);
					if(mysqli_query($assetdb, $query)){
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