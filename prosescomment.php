<?php 
	include "connection.php";

	$nama = $_POST['nama'];
	$mail = $_POST['mail'];
	$pesan = $_POST['pesan'];

	$query = "INSERT  INTO comment VALUES ('$nama', '$mail', '$pesan')";
	$result = mysql_query($query);

	if ($query) {
		header("location:index.php");
	}
	else{
		mysql_error();
	}
 ?>
