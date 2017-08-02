<?php
session_start();
require_once("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>TOEFL Online</title>
<meta charset="utf-8">
<link rel="icon" href="">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<!--Start Header-->
<header class="page1">
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="#" onClick="goToByScroll('page1'); return false;"><img height="30px" width="1300px" src="images/logo2.png" alt=""></a></h1>
        <div class="menu_block">
        <nav class="">
          <ul class="sf-menu">
            <li class="men1"><a onClick="goToByScroll('page1'); return false;" href="index.php">Home</a><strong class="hover"></strong></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<!--End Header-->

<!-- Start Grammar -->
<div id="page2" class="content"> 
  <div class="container_12">\
  <div class="grid_14">
    <div class="box">
      <div style="color:#666666; font-size:30px; padding-bottom:20px; ">Listening - Model Test 1
      </div>
         <div style="background-color:#666666; color:white; margin-left:150px; width:620px; padding:5px 0">There are 15 questions in this quiz. Read the grammar explanation below. 
          <div class="box3">
            <?php
              include "connection.php";
              $benar_list = 0;
              $salah = 0;
              if (isset($_POST["soal"])){
              foreach($_POST['soal'] as $key
              => $value){
                  $cek = mysql_query("SELECT * FROM listening WHERE no=$key");
                  while($c = mysql_fetch_array($cek)){
                      $jawaban = $c['jawaban'];
              } 
              if($value==$jawaban){
                  $benar_list++;
              }else{
                  $salah++;
              }
              
              } 
              $jumlah
              = $_POST['jumlahsoal'];
              $tidakjawab = $jumlah - $benar_list - $salah;
              if ($benar_list==50) {
                $nilai_list=68;
              }elseif ($benar_list==39) {
                $nilai_list=67;
              }elseif ($benar_list==39) {
                $nilai_list=66;
              }elseif ($benar_list==39) {
                $nilai_list=65;
              }elseif ($benar_list==39) {
                $nilai_list=63;
              }elseif ($benar_list==45) {
                $nilai_list=62;
              }elseif ($benar_list==44) {
                $nilai_list=61;
              }elseif ($benar_list==43) {
                $nilai_list=60;
              }elseif ($benar_list==42) {
                $nilai_list=59;
              }elseif ($benar_list==41) {
                $nilai_list=58;
              }elseif ($benar_list==40) {
                $nilai_list=57;
              }elseif ($benar_list==39) {
                $nilai_list=57;
              }elseif ($benar_list==38) {
                $nilai_list=56;
              }elseif ($benar_list==37) {
                $nilai_list=55;
              }elseif ($benar_list==36) {
                $nilai_list=54;
              }elseif ($benar_list==35) {
                $nilai_list=54;
              }elseif ($benar_list==34) {
                $nilai_list=53;
              }elseif ($benar_list==33) {
                $nilai_list=52;
              }elseif ($benar_list==32) {
                $nilai_list=52;
              }elseif ($benar_list==31) {
                $nilai_list=51;
              }elseif ($benar_list==30) {
                $nilai_list=51;
              }elseif ($benar_list==29) {
                $nilai_list=50;
              }elseif ($benar_list==28) {
                $nilai_list=49;
              }elseif ($benar_list==27) {
                $nilai_list=49;
              }elseif ($benar_list==26) {
                $nilai_list=48;
              }elseif ($benar_list==25) {
                $nilai_list=48;
              }elseif ($benar_list==24) {
                $nilai_list=47;
              }elseif ($benar_list==23) {
                $nilai_list=47;
              }elseif ($benar_list==22) {
                $nilai_list=46;
              }elseif ($benar_list==21) {
                $nilai_list=45;
              }elseif ($benar_list==20) {
                $nilai_list=45;
              }elseif ($benar_list==19) {
                $nilai_list=44;
              }elseif ($benar_list==18) {
                $nilai_list=43;
              }elseif ($benar_list==17) {
                $nilai_list=42;
              }elseif ($benar_list==16) {
                $nilai_list=41;
              }elseif ($benar_list==15) {
                $nilai_list=41;
              }elseif ($benar_list==14) {
                $nilai_list=38;
              }elseif ($benar_list==13) {
                $nilai_list=37;
              }elseif ($benar_list==12) {
                $nilai_list=37;
              }elseif ($benar_list==11) {
                $nilai_list=35;
              }elseif ($benar_list==10) {
                $nilai_list=33;
              }elseif ($benar_list==9) {
                $nilai_list=32;
              }elseif ($benar_list==8) {
                $nilai_list=32;
              }elseif ($benar_list==7) {
                $nilai_list=31;
              }elseif ($benar_list==6) {
                $nilai_list=30;
              }elseif ($benar_list==5) {
                $nilai_list=29;
              }elseif ($benar_list==4) {
                $nilai_list=28;
              }elseif ($benar_list==3) {
                $nilai_list=27;
              }elseif ($benar_list==2) {
                $nilai_list=26;
              }elseif ($benar_list==1) {
                $nilai_list=25;
              }else {
                $nilai_list=24;
              } 
              $email = $_SESSION['email'];
              $simpan = "INSERT INTO nilai_listening(email,jumlah,salah,benar_list,nilai_list) VALUES ('$email', '$jumlah', '$salah', '$benar_list', '$nilai_list')";
              if(mysql_query($simpan)){
                  header("location:test_reading.php");
              }else {
                    echo mysql_error();
              } 
              } 
              ?>
          </div>
        </div>
    </div>
  </div>
  </div>
</div>
<!-- End Grammar -->

<footer>
      <div class="copy2"></a> &copy; Febriani F Damanik (132406106) | <a href="#">Privacy Policy</a> <br> </div>
</footer>
</body>
</html>