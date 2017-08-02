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

	$query = "INSERT  INTO reading VALUES ('$no', '$bacaan', '$pertanyaan', '$a', '$b', '$c', '$d', '$jawaban')";
	$result = mysql_query($query);

	if ($query) {
		echo("<script>alert('Data Berhasil Disimpan'); window.location = 'reading.php'</script>");
	}
	else{
		mysql_error();
	}
 ?>