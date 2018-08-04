<!doctype html>
<html>
	<head>
		<title>Sign up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="signup1.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	</head>
	<body style="background-color: beige">
		<script src=validate.js></script>
		<div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Signup For New Account</h1><br>
				  <form name="signup" action="action.php" method="POST" >
				  	<i class="fa fa-user fa" aria-hidden="true"></i>
				  	Your name<input type="text" name="uname" placeholder="Enter your name" required>

				  	<i class="fa fa-envelope fa" aria-hidden="true"></i>
				  	Your email<input type="email" name="email" placeholder="Enter your Email" required/>

					<i class="fa fa-address-card" aria-hidden="true"></i>
					Aadhar number<input type="text" name="aadhar" placeholder="Enter your Aadhar number" required/>
					
					<i class="fa fa-user fa" aria-hidden="true"></i>
				  	Your phone number<input type="text" minlength="8" name="phno" placeholder="Enter your phno" required>	
					
					<i class="fa fa-lock fa-lg" aria-hidden="true"></i>
					New Password<input type="password" minlength="8" name="pass" placeholder="Enter your Password" required/>
					
					<i class="fa fa-lock fa-lg" aria-hidden="true"></i>
					Confirm Password<input type="password" name="apass" placeholder="Enter your Password" required/>
					

					

					<input type="submit" name="Register" class="loginmodal-submit" value="Register" onclick="return validPass()">
				  </form>
					
				  <div class="login-help">
					<a href="login.php" title="Already have an account?">Login</a>
				  </div>
				</div>
			</div>
	</body>
</html>