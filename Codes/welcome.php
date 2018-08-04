<!doctype html>
<html>
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css" >
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="home.html">Medical Database <sub> Changing lives </sub></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
   		 <form class="navbar-form navbar-right">
   		 	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			
      </li>
  	</ul>
  </form>
	
        </div>
      </div>
    </nav>
	
    <br>


	<br>
	<br>
	<div class="container">
		<h1>Welcome Doctor!</h1>
		<br>
		<br>
		
	</div>
	<h2 style="margin-left:90px">search patient:<br>
	<form class="navbar-form navbar-left" style="margin-left:300px" action="Dataout.php" method="POST">
      		<div class="form-group">
        		<input type="text" class="form-control" placeholder="Patients Aadhar number" name="pano">
      		</div>
			
      	<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
	</form>
	<br><br>
	<h1 style=" margin-left:450px;">OR</h1>
	<form action="addpatient.php" style="margin-left:90px">
	<h2> add new patient:</h2><br>
	<input type="submit" class="btn btn-default" value="add" style="margin-left:320px;width=150px;width: 150px">
	</form>
    <hr>
    
    <br>
    <br>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
</body>
</html>