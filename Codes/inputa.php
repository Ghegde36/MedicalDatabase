<?php
session_start();
include "connection.php";
$al=$_POST['al'];
$alg=$_POST['alg'];
$pno=$_SESSION["pano"];
$quary="INSERT INTO allergies VALUES('$pno','$al','$alg')";
$res=mysqli_query($conn,$quary);
if($res)
	header("Location:addrecord.php");
else
	echo "error while inserting the allergy";
?>