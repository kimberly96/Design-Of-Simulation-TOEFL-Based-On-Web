<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_data = "toefl";
	// Perintah koneksi Server MySQL

	$koneksi
	 = mysql_connect($db_host, $db_user, $db_pass)
	    or die ("Koneksi gagal".mysql_error());
	mysql_select_db($db_data, $koneksi)
	or die ("Baca DB gagal".mysql_error());
?>