<?php 
	include "conection.php";
	$no = $_GET['id'];

	$query = mysql_query("DELETE FROM reading WHERE no='$no'");	
	if ($query) {
		echo("<script>alert('Data Berhasil Dihapus'); window.location = 'reading.php'</script>");
	}
	else{
		mysql_error();
	}
 ?>