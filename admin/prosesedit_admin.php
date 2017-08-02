<?php 
session_start();

	include "conection.php";
	$user = $_POST['user'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	$query = mysql_query("UPDATE admin SET password='$password', nama='$nama', email='$email' WHERE user='$user'");

	if ($query) {
		header("location:profil.php");
	}
	else{
		mysql_error();
	}
 ?>