<?php
session_start();
$pano=$_SESSION['pano'];
$rno=$_SESSION['rno'];

include "connection.php";
$md=$_POST['md'];
$dosage=$_POST['dosage'];
$query="INSERT INTO medication VALUES('$pano','$rno','$md','$dosage')";
$res=mysqli_query($conn,$query);
if($res)
	header("Location:addecont.php");
else
	echo "error while inserting medication details ";
?>
