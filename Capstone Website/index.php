<html>
<head> 
<link rel="stylesheet" href="css/test.css" type="text/css"/>
</head>

<div class="login">
	<h1>Login</h1>
    <form method="post" action="website.php">
    	<input type="text" name="u" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
		
		 <script type="text/javascript">
                    function isEmpty(){
                        if(document.forms['form'].passwordField.value === "") {
                            alert("The password cannot be empty.");
                            return false;
                        }
                        return true;
                    }
                </script>
    </form>
	
	<p>
		<?php
			$username = $_POST['u'];
			$password = $_POST['p'];
			error_reporting(E_ALL ^ E_WARNING);
			$moviesdb = new mysqli('capstonedb.cdm0wchr34ds.us-east-2.rds.amazonaws.com',$username,$password,'CapstoneDB');

			$connected = $moviesdb->connect_errno;
							
			$moviesdb->close();

			if (!$connected) {
				$_SESSION["password"] = $password;
				header('Location: website.php');
			}
			else {
				header('Location: incorrectPassword.html');
			}
		?>
		</p>
		
	<form>
		<a href="adminlogin.php">Admin Login</a>
	</form>
</div>
</html>