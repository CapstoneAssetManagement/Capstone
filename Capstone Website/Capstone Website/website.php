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
				   
					$(this).removeClass('highlight');
				   
				   $(this).addClass('highlight').siblings().removeClass('highlight');
				});

				//headerInfo();
				
		   }
		   
		   
		  
			 function tableCall(){
				
				  //var value = $('#pushy-submenu').find(':open').text();
				  var value = $('li.pushy-submenu.pushy-submenu-open').text();

				   $.post("test.php",{value:value}, function(data){
					 $("#data-table").html(data);
				   });
				   return false;
								
			}
			
			function headerInfo(row){
				 var table = document.getElementById("data-table"); 
				
				/* var thArray = [];

					$('thead > tr').each(function(){
						thArray.push($(this).text())
					})
						
						
						alert(thArray[0]); */
						
						
						var headers = [];
						$('#data-table th').each(function(index, item) {
							headers[index] = $(item).html();
						});
						
						
						
						var data = [];
						
						var cells = table.getElementsByTagName("TD");
						var rowLength = table.getElementsByTagName("TR").length;
						
						for(var i = 0; i < rowLength; i++){
							
							if(i == row){
								for(var j = 0; j < 6; j++ )
								data.push(table.rows[i].cells[j].innerHTML);
							}
						}
						//alert(data.length);
						var header = document.getElementsByClassName("header-container");
						//alert(header[0]);
						var headerSection1 = document.getElementById("subheader-Section-1");
						var headerSection2 = document.getElementById("subheader-Section-2");
						var headerSection3 = document.getElementById("subheader-Section-3");
						var headerSection4 = document.getElementById("subheader-Section-4");
						var headerSection5 = document.getElementById("subheader-Section-5");
						var headerSection6 = document.getElementById("subheader-Section-6");
						
						//alert(data[0]);
						
						headerSection1.innerHTML = headers[0] + ": " + data[0];
						headerSection2.innerHTML = headers[1] + ": " + data[1];
						headerSection3.innerHTML = headers[2] + ": " + data[2];
						headerSection4.innerHTML = headers[3] + ": " + data[3];
						headerSection5.innerHTML = headers[4] + ": " + data[4];
						headerSection6.innerHTML = headers[5] + ": " + data[5];
						
						//document.getElementById('subheader-Section-2').innerHTML = 
						//	document.getElementById('#data-data-table tbody tr.highlight td');
		
			}
			
			function findRow(){
				var tab = document.getElementById('data-table' );
					var rIndex;
					
					for(var a = 0; a < tab.rows.length; a++){
						for(var b = 0; b < tab.rows[a].cells.length; b++){
							tab.rows[a].cells[b].onclick = function(){
								rIndex = this.parentElement.rowIndex;
								headerInfo(rIndex); 
							}
						}
					}
			}
		</script>
        
		<script>
			$(document).ready(function() {
			$("#data-table tr").click(function(){
						headerInfo($(this).index()+1);
					});
			});
		</script>
		
		<script type="text/javascript">
      $(function() {
        $("#header-text-container").bind('submit-btn',function() {
          var value = $('#textarea').val();
           $.post('search_query.php',{value:value}, function(data){
             $("#data-table").html(data);
           });
           return false;
        });
      });
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
			<form id="header-text-container" action="">
				<input type="text" class="form-control" id="textarea" placeholder="Search">
			    <div class="dropdownSearch">
					<i role="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<span class="caret"></span></i>
						<ul class="dropdown-menu" id="dropdownSearchmenu">
						  <?php
						$assetdb = new mysqli('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB') or die("Database error");
						$select = 'SHOW TABLES';
						$result = $assetdb->query($select);

						echo "<ul>";
						while($table = $result->fetch_array()){
								echo "<input id='checkBox'  type='checkBox' >" . $table[0] . "</input>";
						}
						echo "</ul>";
					
						?>
						</ul> 
					
				</div>
					<button type="submit" class="btn btn-default" id="submit-btn">Submit</button>
					
		    </div>
				
			</form>
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
				
				
				while($table = $result->fetch_array()){
					echo "<li class='pushy-submenu' >";
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
			<div id="header-section-1">
				<ul id="subheader-Section-1">
					<p>
						Section 1
					</p>
				</ul>
				<ul id="subheader-Section-2">
					<p>
						Section 2
					</p>
				</ul>
				<ul id="subheader-Section-3">
					<p>
						Section 3
					</p>
				</ul>
				
			</div>
			
			<div id="header-section-2">
				<ul id="subheader-Section-4">
					<p>
						Section 4
					</p>
				</ul>
				<ul id ="subheader-Section-5">
					<p>
						Section 5
					</p>
				</ul>
			</div>
			
			<div id="header-section-3">
				<ul id="subheader-Section-6">
					<p>
							Section 6
					</p>
				</ul>
			</div>
			
		
	</div>
	
	<div class="data-table-container">
		<div class="table-buttons">
			<ul>  <!-- file:///Capstone%20Website/Form-add-row.html -->

<!--
				<button class="glyphicon glyphicon-plus-sign" onClick="window.open('https://s3.amazonaws.com/cpsnbucket/Capstone+Website/Form-add-row1.html', '_blank', 'toolbar=no,scrollbars=no,resizable=yes,top=200,left=500,width=500,height=300')" 	
				role="button"></button>
-->

			<button class="glyphicon glyphicon-plus-sign" onClick="window.open('http://localhost/Capstone%20Website/Form-add-row1.html', '_blank', 'toolbar=no,scrollbars=yes,resizable=yes,top=200,left=500,width=500,height=300')" 	
				role="button"></button>

				<button class="glyphicon glyphicon-remove" id="delete-btn" onClick="window.open('http://localhost/Capstone%20Website/deleteRow.html', '_blank', 'toolbar=no,scrollbars=yes,resizable=yes,top=200,left=500,width=500,height=300')"
					role="button"></button>
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
						
						 echo "<table class='table table-hover table-bordered' id='data-table' onclick=' tableHighlight(); findRow(); ' >";
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

        <div class="site-overlay" name ="site-overlay" ></div>

        <!-- Pushy JS -->
       <script src="js/pushy.min.js"></script>

    </body>
    
    
</html>
