<?php 
	include "conection.php";
	$no = $_GET['id'];

	$query = mysql_query("DELETE FROM tbl_uploads WHERE id='$no'");	
	if ($query) {
		echo("<script>alert('Data Berhasil Dihapus'); window.location = 'listening.php'</script>");
	}
	else{
		mysql_error();
	}
 ?>