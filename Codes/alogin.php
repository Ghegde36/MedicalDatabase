<?php
session_start();
$_SESSION["user"]=$_POST['user'];
$_SESSION["p"]=$_POST['pass'];

include "connection.php";
$uname=$_POST['user'];
$pass=$_POST['pass'];
$query="SELECT * FROM `doctor` WHERE Da_no='$uname' and Password='$pass'";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)> 0)
	header("Location:welcome.php");
else{
	header("Location:login.php");
}
?>