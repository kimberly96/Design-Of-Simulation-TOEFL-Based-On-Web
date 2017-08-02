<?php 
	include "conection.php";

	$no = $_POST['no'];
	$pertanyaan = $_POST['pertanyaan'];
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$jawaban = $_POST['jawaban'];

	$query = mysql_query("UPDATE structure SET pertanyaan='$pertanyaan', a='$a', b='$b', c='$c', d='$d', jawaban='$jawaban' where no='$no'");

	if ($query) {
		header("location:structure.php");
	}
	else{
		mysql_error();
	}
 ?>