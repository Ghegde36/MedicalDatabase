<?php
session_start();
$dano=$_SESSION["user"];
$pano=$_SESSION["pano"];
$_SESSION["rno"]=$_POST['rno'];
include "connection.php";
$rno=$_POST['rno'];
$rd=$_POST['rd'];
$date=$_POST['date'];
$rm=$_POST['rm'];
$quary="INSERT INTO records VALUES('$dano','$pano','$rno','$rd','$date','$rm')";
$res=mysqli_query($conn,$quary);
if($res)
	header("Location:addmedi.php");
else
	echo "error while inserting record";
?>