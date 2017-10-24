<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Asset Management Database</title>
        <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta http-equiv="Cache-control" content="no-cache">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/demo.css">
        <!-- Pushy CSS -->
        <link rel="stylesheet" href="css/pushy.css">
        
        <link rel="stylesheet" href="css/homepage-body.css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  	
       	
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        
        
       <script>
		   
		   function tableHighlight(){
			   $('#data-data-table').on('click', 'tbody tr', function(event) {	  
				   
					$(this).removeClass;
				   
				   $(this).addClass('highlight').siblings().removeClass('highlight');
				   
				});
		   }
		  
			 function deleteRow(){
				 alert("here");
			 }
			function tableCall(){
				
				  //var value = $('#pushy-submenu').find(':open').text();
				  var value = $('#first-link').text();
				 
				   $.post('test.php',{value:value}, function(data){
					 $("#data-table").html(data);
				   });
				   return false;
								
			}
			
			 
		</script>
        
    </head>
    
    <body>
        <header class="site-header push">
        <div class="top-menu-buttons" id="top-menu-items">
       	    <button class="glyphicon glyphicon-chevron-right" id="menu-btn" ></button>
        	<a href="#" class="glyphicon glyphicon-home" role="button" aria-hidden="true" id="home"></a>
			<a href="#" class="glyphicon glyphicon-cog" role="button" aria-hidden="true" id="cog"></a>
			 <div class="dropdown">
			   <i class="glyphicon glyphicon-menu-hamburger" data-toggle="dropdown" role="button" id="hamburger" aria-haspopup="true" aria-expanded="false"></i>
					<ul class="dropdown-menu" id="dropdown-menu">
					  <li><a href="#">Action</a></li>
						  <li><a href="#">Another action</a></li>
						  <li><a href="#">Something else here</a></li>
						  <span class="separator-menu"></span>
					  <li><a href="#">Separated link</a></li>
						  <span class="separator-menu"></span>
						<li><a href="#">One more separated link</a></li>
					</ul> 
		    </div>
        </div>
        <div class="header-text-container">
         	<input type="text" class="form-control" placeholder="Search">
         <button type="submit" class="btn btn-default" id="submit-btn">Submit</button>
        </div>
         
       
       </header>
		
        
        <!-- Pushy Menu -->
        <nav class="pushy pushy-left" id="pushy-left" >
			   
            <div class="pushy-content">
			
			<?php
				$assetdb = new mysqli('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB') or die("Database error");
				$select = 'SHOW TABLES';
				$result = $assetdb->query($select);
				//echo "<form method='POST'>";
				echo "<ul>";
				echo "<li class='pushy-submenu' >";
				
				while($table = $result->fetch_array()){
						echo "<button id='first-link' onclick='tableCall()'>" . $table[0] . "</button>";
				}
				echo "</li>";
				echo "</ul>";
				//echo "</form>";
			?>
               
            </div>
        </nav>


        <!-- Your Content -->
        <div class="body-container" id="container">
            
		
        <div class="header-container">
        	<div class="header-title">
        		
        	</div>
        
		<p>In here we will have the information about the asset currently clicked on </p>
		<p>As well as other tabs to take you to other information</p>
	</div>
	
	<div class="data-table-container">
		<div class="table-buttons">
			<ul>  <!-- file:///Capstone%20Website/Form-add-row.html -->

<!--
				<button class="glyphicon glyphicon-plus-sign" onClick="window.open('https://s3.amazonaws.com/cpsnbucket/Capstone+Website/Form-add-row1.html', '_blank', 'toolbar=no,scrollbars=no,resizable=yes,top=200,left=500,width=500,height=300')" 	
				role="button"></button>
-->

			<button class="glyphicon glyphicon-plus-sign" onClick="window.open('http://localhost/Capstone%20Website/Form-add-row1.php', '_blank', 'toolbar=no,scrollbars=no,resizable=yes,top=200,left=500,width=500,height=300')" 	
				role="button"></button>

				<button class="glyphicon glyphicon-remove" id="delete-btn" onClick="deleteRow()" role="button"></button>
				<li class="glyphicon glyphicon-edit" role="button"></li>
			</ul>
		</div>
		<div class="data-table-table" id="data-data-table">
			<p>
			<?php
					$assetdb = new mysqli('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
					
					if (mysqli_connect_errno()) {
						echo 'Database Access Error!';
						echo 'problem: ' . mysqli_connect_errno();
					} else {
						
						$select = "SELECT * FROM `Employees`";
						$result = $assetdb->query( $select );
						
						 echo "<table class='table table-hover table-bordered' id='data-table' onClick='tableHighlight()' >";
							echo "<thead>";
								$row2 = $result->fetch_assoc();
								foreach($row2 as $col => $value){
									echo "<th>";
									echo $col;
									echo "</th>";
								}
							echo "</thead>";
							
							echo "<tbody>";
							$i = 0;
							while($row = $result->fetch_array()){  #fix this shit sometime, its horrendous
								echo "<tr><td>" 	. $row[$i++] 	. "</td><td>" 
														. $row[$i++]  	. "</td><td>"
														. $row[$i++] 	. "</td><td>"
														. $row[$i++] 	. "</td><td>"
														. $row[$i++]  . "</td><td>"
														. $row[$i] 		. "</td></tr>";
														$i = 0;
												
							}
							echo "</tbody>";
							echo "</table>";
						$assetdb->close();
			}
					
				?>
			</p>
		</div>
	</div>

        </div>

        <div class="site-overlay" name ="site-overlay" onClick="switchButtonsRight()"></div>

        <!-- Pushy JS -->
       <script src="js/pushy.min.js"></script>

    </body>
    
    
</html>
