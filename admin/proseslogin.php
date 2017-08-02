<?php 
session_start();
	
	require_once("conection.php");
	
	$user = $_POST['user'];
	$password = $_POST['password'];

	$cekuser = mysql_query("SELECT * FROM admin WHERE user = '$user' and password = '$password'");
	$jumlah = mysql_num_rows($cekuser);
	$hasil = mysql_fetch_array($cekuser);
	
	if($jumlah == 0) {
		echo "<script>alert('User belum terdaftar!'); window.location = 'index.php'</script>";
	} else {
		if($password > $hasil['password']) {
		echo "<script>alert('Password Salah!'); window.location = 'index.php'</script>";
		} else {
		session_start();
		$_SESSION['user'] = $_POST['user'];
		$_SESSION['password'] = $_POST['password'];

		header('location:home.php');
		}
	}
?>