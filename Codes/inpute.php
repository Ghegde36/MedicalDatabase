<?php
session_start();
$pano=$_SESSION["pano"];
include "connection.php";
$name=$_POST['cname'];
$pno=$_POST['pno'];
$query="INSERT INTO econtacts VALUES('$pano','$name','$pno')";
$res=mysqli_query($conn,$query);
if($res)
	header("Location:login.php");
else
	echo "error while inserting emergency contacts";
?>