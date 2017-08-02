<?php 
	include "conection.php";
	$email = $_GET['id'];

	$query = mysql_query("DELETE FROM user WHERE email='$email'");	
	if ($query) {
		echo("<script>alert('Data Berhasil Dihapus'); window.location = 'user.php'</script>");
	}
	else{
		mysql_error();
	}
 ?>