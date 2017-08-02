<?php 
session_start();
	
	require_once("connection.php");
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$cekuser = mysql_query("SELECT * FROM user WHERE email = '$email' and password = '$password'");
	$jumlah = mysql_num_rows($cekuser);
	$hasil = mysql_fetch_array($cekuser);

	
	if($jumlah == 0) {
		echo "<script>alert('Email atau Password Salah'); window.location = 'index.php'</script>";
	} else {
		if($password > $hasil['password']) {
		echo "<script>alert('Password Salah!'); window.location = 'index.php'</script>";
		} else {
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
	

		header('location:index.php');
		}
	}
?>