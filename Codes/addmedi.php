
<!doctype html>
<html>
<head>
	<title>Add patient</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css" >

 	<style>
 		.hello
 		{
 			padding: 6px

 		}
 	</style>

</head>
<body style="background-color:#3b5998">

	<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
   	<ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

	<div class="container">
		<h1><center>New Patient Medication Entry</center></h1><br>
	<form class="form-horizontal" action="inputm.php" method="POST">
	<div class="form-group">
      	<label class="control-label col-sm-2">Medication Details</label>
      	<div class="col-sm-8"> 
        <input type="text" class="form-control" placeholder="Enter Details" name="md">
      	</div>
    </div>

    	<div class="form-group">
      	<label class="control-label col-sm-2">Dosage</label>
      	<div class="col-sm-8">
        <input type="text" class="form-control" placeholder="Enter Dosage" name="dosage">
      	</div>
    </div>

     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>

  	</form>
	</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
</body>
</html>