<?php 
	include "connection.php";
	$SkorAkhir = $_GET['id'];

	$query = mysql_query("DELETE FROM nilai_akhir WHERE SkorAkhir='$SkorAkhir'");	
	if ($query) {
		echo("<script>alert('Data Berhasil Dihapus'); window.location = 'index.php'</script>");
	}
	else{
		mysql_error();
	}
 ?>