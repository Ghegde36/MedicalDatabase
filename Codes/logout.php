<?php
session_destroy();
?>
<!doctype html>
<html>
<head>
	<title>
	LOGIN
	</title>
	</h1>
	<link rel="stylesheet" type="text/css" href="login1.css">
	</head>
	<body style="background-color:darkgrey">
    	  <div class="modal-dialog">
				<h1>Sucessfully Logged Out</h1>
				<div class="loginmodal-container">
					<h1>Login to Your Account	</h1><br>
					<img src="doc1.jpg" align="bottom" style="margin-left:65px">
				  <form action="alogin.php" method="POST">
					<b></b><input type="text" name="user" placeholder="Enter Username" required><br>
					<b></b><input type="password" name="pass" placeholder="Enter Password" required><br>
					<input type="submit" name="submit" class="login loginmodal-submit" value="Login">
				  </form>
				  <h1>OR </h1>
				  <div class="login-help">
				  <form action="signup.php">
					<input type="submit" name="submit" class="login loginmodal-submit" value="Signup">
				  </form>
				  </div>
				</div>
			</div>
	</body>
</html>