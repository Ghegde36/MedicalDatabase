<?php
include "connection.php";
$name=$_POST['uname'];
$email=$_POST['email'];
$aid=$_POST['aadhar'];
$pno=$_POST['phno'];
$pass=$_POST['pass'];
$q="SELECT * FROM `doctor` WHERE Da_no=$aid";
$e=mysqli_query($conn,$q);
$query="INSERT INTO `doctor` VALUES('$aid','$name','$pno','$email','$pass')";
$res=mysqli_query($conn,$query);
if($res)
	header("Location:login2.php");

?>
