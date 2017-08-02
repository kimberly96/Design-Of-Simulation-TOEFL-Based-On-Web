<?php 
	include "conection.php";

	$no = $_POST['no'];
	$part = $_POST['part'];
	$a = $_POST['a'];
	$b = $_POST['b'];	
	$c = $_POST['c'];
	$d = $_POST['d'];
	$jawaban = $_POST['jawaban'];

	$query = "INSERT  INTO listening VALUES ('$no', '$part', '$a', '$b', '$c', '$d', '$jawaban')";
	$result = mysql_query($query);

	if ($query) {
		echo("<script>alert('Data Berhasil Disimpan'); window.location = 'listening.php'</script>");
	}
	else{
		mysql_error();
	}
 ?>