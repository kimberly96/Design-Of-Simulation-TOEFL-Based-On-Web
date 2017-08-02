<?php 

require_once("connection.php");

	$nama = $_POST['nama'];
	$nname = $_POST['nname'];
	$bln = $_POST['bln'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$cekuser = mysql_query("SELECT * FROM user WHERE email = '$email'");
	if(mysql_num_rows($cekuser) <> 0) {
		echo "<script>alert('Email sudah terdaftar'); window.location = 'index.php'</script>";
	} else {
		if(!$email || !$password) {
		echo "<script>alert('Masih ada data yang kosong'); window.location = 'index.php'</script>";
	} else {
		$sql  = "insert into user values('$nama','$nname','$bln','$gender','$email','$password')";
		$res  = mysql_query($sql) or die(mysql_error());
		if ($res) {
				echo "<script>alert('Pendaftaran sukses, Silahkan Login'); window.location = 'index.php'</script>";
			} else {
				echo "<script>alert('Pendaftaran gagal, Silahkan Ulangi!'); window.location = 'index.php'</script>";
			}
		}
	}
?>