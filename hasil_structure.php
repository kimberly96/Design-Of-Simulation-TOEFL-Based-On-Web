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
              $benar_struct = 0;
              $salah = 0;
              if (isset($_POST["soal"])){
              foreach($_POST['soal'] as $key
              => $value){
                  $cek = mysql_query("SELECT * FROM structure WHERE no=$key");
                  while($c = mysql_fetch_array($cek)){
                      $jawaban = $c['jawaban'];
              } 
              if($value==$jawaban){
                  $benar_struct++;
              }else{
                  $salah++;
              }
              
              } 
              $jumlah = $_POST['jumlahsoal'];
              $tidakjawab = $jumlah - $benar_struct - $salah;
                if ($benar_struct==40) {
                  $nilai_struct=68;
                }elseif ($benar_struct==39) {
                  $nilai_struct=67;
                }elseif ($benar_struct==38) {
                  $nilai_struct=65;
                }elseif ($benar_struct==37) {
                  $nilai_struct=63;
                }elseif ($benar_struct==36) {
                  $nilai_struct=61;
                }elseif ($benar_struct==35) {
                  $nilai_struct=60;
                }elseif ($benar_struct==34) {
                  $nilai_struct=58;
                }elseif ($benar_struct==33) {
                  $nilai_struct=57;
                }elseif ($benar_struct==32) {
                  $nilai_struct=56;
                }elseif ($benar_struct==31) {
                  $nilai_struct=55;
                }elseif ($benar_struct==30) {
                  $nilai_struct=54;
                }elseif ($benar_struct==29) {
                  $nilai_struct=53;
                }elseif ($benar_struct==28) {
                  $nilai_struct=52;
                }elseif ($benar_struct==27) {
                  $nilai_struct=51;
                }elseif ($benar_struct==26) {
                  $nilai_struct=50;
                }elseif ($benar_struct==25) {
                  $nilai_struct=49;
                }elseif ($benar_struct==24) {
                  $nilai_struct=48;
                }elseif ($benar_struct==23) {
                  $nilai_struct=47;
                }elseif ($benar_struct==22) {
                  $nilai_struct=46;
                }elseif ($benar_struct==21) {
                  $nilai_struct=45;
                }elseif ($benar_struct==20) {
                  $nilai_struct=44;
                }elseif ($benar_struct==19) {
                  $nilai_struct=43;
                }elseif ($benar_struct==18) {
                  $nilai_struct=42;
                }elseif ($benar_struct==17) {
                  $nilai_struct=41;
                }elseif ($benar_struct==16) {
                  $nilai_struct=40;
                }elseif ($benar_struct==15) {
                  $nilai_struct=39;
                }elseif ($benar_struct==14) {
                  $nilai_struct=38;
                }elseif ($benar_struct==13) {
                  $nilai_struct=37;
                }elseif ($benar_struct==12) {
                  $nilai_struct=36;
                }elseif ($benar_struct==11) {
                  $nilai_struct=35;
                }elseif ($benar_struct==10) {
                  $nilai_struct=34;
                }elseif ($benar_struct==9) {
                  $nilai_struct=33;
                }elseif ($benar_struct==8) {
                  $nilai_struct=32;
                }elseif ($benar_struct==7) {
                  $nilai_struct=31;
                }elseif ($benar_struct==6) {
                  $nilai_struct=30;
                }elseif ($benar_struct==5) {
                  $nilai_struct=29;
                }elseif ($benar_struct==4) {
                  $nilai_struct=28;
                }elseif ($benar_struct==3) {
                  $nilai_struct=27;
                }elseif ($benar_struct==2) {
                  $nilai_struct=26;
                }elseif ($benar_struct==1) {
                  $nilai_struct=25;
                }else {
                  $nilai_struct=24;
                }
              $email = $_SESSION['email'];
              $simpan = "INSERT INTO nilai_structure(email,jumlah,salah,benar_struct,nilai_struct) VALUES ('$email', '$jumlah', '$salah', '$benar_struct', '$nilai_struct')";
              if(mysql_query($simpan)){
                  header("location:test_listening.php");
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