<?php 
	session_start();
	include "connection.php";
	$id = $_SESSION['id'];

	$query = mysql_query("INSERT INTO nilai_structure (id) VALUES ('$id')");	
	$query2 = mysql_query("INSERT INTO nilai_listening (id) VALUES ('$id')");	
	$query3 = mysql_query("INSERT INTO nilai_reading (id) VALUES ('$id')");	
	
	if ($query){
		if ($query2 && $query3) {
			header("location:index.php");
		}
		else{
			mysql_error();
		}
	}
	else{
			mysql_error();
	}
 ?>