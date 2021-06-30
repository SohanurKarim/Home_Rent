<?php
session_start();

//connecction to database

$db=mysqli_connect("localhost","root","","user");

if(isset($_POST['register_bt']))
{
	$Username=mysql_real_escape_string($_POST['username']);
	$phone=mysql_real_escape_string($_POST['phone']);
	$email=mysql_real_escape_string($_POST['email']);
	$national_id=mysql_real_escape_string($_POST['national_id']);
	$password=mysql_real_escape_string($_POST['password']);
	
	// to database
	$sql="INSERT INTO sign_up(id,Username,Phone,Email,National_id,Password) VALUES('','$Username','$phone','$email','$national_id','$password')";
	mysqli_query($db,$sql);
	header("location:postHome.php");
}



?>