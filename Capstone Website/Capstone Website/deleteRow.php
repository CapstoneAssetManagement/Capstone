<?php

          mysqli_connect('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com','MasterUser','Change.17','CapstoneDB');
         
          $strSQL =("DELETE FROM '".$_POST["value1"]."' WHERE '".$_POST["value3"]."'='".$_POST["value2"]."'");
          $rs = mysql_query($strSQL);
            echo 1;  // here i use 1 to get response if this is done successfully then in ajax we get 1 in data  
          mysql_close();

 ?>