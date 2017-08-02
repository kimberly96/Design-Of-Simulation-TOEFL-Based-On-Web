<?php 
	include "conection.php";

	$no = $_POST['no'];
	$part = $_POST['part'];
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$jawaban = $_POST['jawaban'];

	$query = mysql_query("UPDATE listening SET part='$part', a='$a', b='$b', c='$c', d='$d', jawaban='$jawaban' where no='$no'");

	if ($query) {
		header("location:listening.php");
	}
	else{
		mysql_error();
	}
 ?>