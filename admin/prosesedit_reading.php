<?php 
	include "conection.php";

	$no = $_POST['no'];
	$bacaan = $_POST['bacaan'];
	$pertanyaan = $_POST['pertanyaan'];
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$jawaban = $_POST['jawaban'];

	$query = mysql_query("UPDATE reading SET bacaan='$bacaan', pertanyaan='$pertanyaan', a='$a', b='$b', c='$c', d='$d', jawaban='$jawaban' where no='$no'");

	if ($query) {
		header("location:reading.php");
	}
	else{
		mysql_error();
	}
 ?>