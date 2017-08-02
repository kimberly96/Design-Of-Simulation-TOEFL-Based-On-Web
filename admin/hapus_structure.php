<?php 
	include "conection.php";
	$no = $_GET['id'];

	$query = mysql_query("DELETE FROM structure WHERE no='$no'");	
	if ($query) {
		echo("<script>alert('Data Berhasil Dihapus'); window.location = 'structure.php'</script>");
	}
	else{
		mysql_error();
	}
 ?>