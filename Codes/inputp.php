<?php
session_start();
$_SESSION["pano"]=$_POST['ano'];
include "connection.php";
$name=$_POST['pname'];
$ano=$_POST['ano'];
$date=$_POST['date'];
$sex=$_POST['sex'];
$adress=$_POST['adress'];
$pno=$_POST['pno'];
$bg=$_POST['bg'];

$quary="INSERT INTO patient (Pa_no,Pname,Phone_no,blood_group,Sex,Dob,Adress) VALUES('$ano','$name','$pno','$bg','$sex','$date','$adress')";
$res=mysqli_query($conn,$quary);
if($res)
	header("Location:addall.php");
else
	echo "error inserting patient";


?>