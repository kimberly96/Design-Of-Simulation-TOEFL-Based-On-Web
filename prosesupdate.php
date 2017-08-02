<?php 
session_start();
	include "connection.php";
	$nama = $_POST['nama'];
	$nname = $_POST['nname'];
	$bln = $_POST['bln'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = mysql_query("UPDATE user SET nama='$nama', nname='$nname', bln='$bln', gender='$gender', password='$password' WHERE email='$email'");

	if ($query) {
		header("location:index.php");
	}
	else{
		mysql_error();
	}
 ?>