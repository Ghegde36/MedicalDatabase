<?php
	$conn = mysqli_connect("localhost","root","","medicalrecord");
	if($conn)
		echo "";
	else
		die("unable to connect to the server") . mysqli_connect_error();
?>