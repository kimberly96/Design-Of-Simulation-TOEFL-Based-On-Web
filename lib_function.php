<?php 
 function cek_login(){
	$hasil = 0;
	
	$email  = isset($_SESSION['email']) ? $_SESSION['email']    : null;
    $password  = isset($_SESSION['password'])  ? $_SESSION['password']     : null;
    $nama  = isset($_SESSION['nama'])  ? $_SESSION['nama']     : null;

	
	if (!empty($_SESSION['email']) and !empty($_SESSION['password'])){
		$hasil = 1;
	}
	
	return $hasil;
  }