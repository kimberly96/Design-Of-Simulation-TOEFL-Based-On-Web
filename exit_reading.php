<?php 
	session_start();
	include "connection.php";
	$id = $_SESSION['id'];

	$query = mysql_query("INSERT INTO nilai_reading (id) VALUES ('$id')");	
	
	if ($query) {
		header("location:index.php");
	}
	else{
		mysql_error();
	}
	
 ?>