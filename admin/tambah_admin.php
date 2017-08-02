<?php 
	include "conection.php";

	$user = $_POST['user'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];	
	$email = $_POST['email'];

	$query = "INSERT  INTO admin VALUES ('$user', '$password', '$nama', '$email')";
	$result = mysql_query($query);

	if ($query) {
		echo("<script>alert('Data Berhasil Disimpan'); window.location = 'profil.php'</script>");
	}
	else{
		mysql_error();
	}
 ?>