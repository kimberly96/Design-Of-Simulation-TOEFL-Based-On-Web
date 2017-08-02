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
              $benar = 0;
              $salah = 0;
              if (isset($_POST["soal"])){
              foreach($_POST['soal'] as $key
              => $value){
                  $cek = mysql_query("SELECT * FROM reading WHERE no=$key");
                  while($c = mysql_fetch_array($cek)){
                      $jawaban = $c['jawaban'];
              } 
              if($value==$jawaban){
                  $benar++;
              }else{
                  $salah++;
              }
              
              } 
              $jumlah
              = $_POST['jumlahsoal'];
              $tidakjawab = $jumlah - $benar - $salah;
              if ($benar==50) {
                $nilai=67;
              }elseif ($benar==39) {
                $nilai=66;
              }elseif ($benar==39) {
                $nilai=65;
              }elseif ($benar==39) {
                $nilai=63;
              }elseif ($benar==39) {
                $nilai=61;
              }elseif ($benar==45) {
                $nilai=60;
              }elseif ($benar==44) {
                $nilai=59;
              }elseif ($benar==43) {
                $nilai=58;
              }elseif ($benar==42) {
                $nilai=57;
              }elseif ($benar==41) {
                $nilai=56;
              }elseif ($benar==40) {
                $nilai=55;
              }elseif ($benar==39) {
                $nilai=54;
              }elseif ($benar==38) {
                $nilai=54;
              }elseif ($benar==37) {
                $nilai=53;
              }elseif ($benar==36) {
                $nilai=52;
              }elseif ($benar==35) {
                $nilai=52;
              }elseif ($benar==34) {
                $nilai=51;
              }elseif ($benar==33) {
                $nilai=50;
              }elseif ($benar==32) {
                $nilai=49;
              }elseif ($benar==31) {
                $nilai=48;
              }elseif ($benar==30) {
                $nilai=48;
              }elseif ($benar==29) {
                $nilai=47;
              }elseif ($benar==28) {
                $nilai=46;
              }elseif ($benar==27) {
                $nilai=46;
              }elseif ($benar==26) {
                $nilai=45;
              }elseif ($benar==25) {
                $nilai=44;
              }elseif ($benar==24) {
                $nilai=43;
              }elseif ($benar==23) {
                $nilai=43;
              }elseif ($benar==22) {
                $nilai=42;
              }elseif ($benar==21) {
                $nilai=41;
              }elseif ($benar==20) {
                $nilai=40;
              }elseif ($benar==19) {
                $nilai=39;
              }elseif ($benar==18) {
                $nilai=38;
              }elseif ($benar==17) {
                $nilai=37;
              }elseif ($benar==16) {
                $nilai=36;
              }elseif ($benar==15) {
                $nilai=35;
              }elseif ($benar==14) {
                $nilai=34;
              }elseif ($benar==13) {
                $nilai=32;
              }elseif ($benar==12) {
                $nilai=31;
              }elseif ($benar==11) {
                $nilai=30;
              }elseif ($benar==10) {
                $nilai=29;
              }elseif ($benar==9) {
                $nilai=28;
              }elseif ($benar==8) {
                $nilai=28;
              }elseif ($benar==7) {
                $nilai=26;
              }elseif ($benar==6) {
                $nilai=26;
              }elseif ($benar==5) {
                $nilai=24;
              }elseif ($benar==4) {
                $nilai=23;
              }elseif ($benar==3) {
                $nilai=23;
              }elseif ($benar==2) {
                $nilai=22;
              }elseif ($benar==1) {
                $nilai=21;
              }else {
                $nilai=22;
              } 


              $email = $_SESSION['email'];
              $simpan = "INSERT INTO nilai_reading(email,jumlah,benar,salah,nilai) VALUES ('$email', '$jumlah', '$benar', '$salah', '$nilai')";
              $read=mysql_query($simpan);
              
              $id = $_SESSION['id'];

              $query ="SELECT * FROM nilai_structure WHERE id='$id'";
              $ex=mysql_query($query);
              $data=mysql_fetch_array($ex);
              $benar_structure = $data['benar_struct'];
              $Structure = $data['nilai_struct'];
              
              $q ="SELECT * FROM nilai_listening WHERE id='$id'";
              $e=mysql_query($q);
              $d=mysql_fetch_array($e);
              $benar_listening = $d['benar_list'];
              $Listening = $d['nilai_list'];
              
              $SkorAkhir = (($Listening + $Structure + $nilai)/3) * 10; 

              $NA = "INSERT INTO nilai_akhir VALUES ('$email', '$SkorAkhir', '$Listening', '$Structure', '$nilai', '$benar_listening', '$benar_structure', '$benar')";
              if(mysql_query($NA)){
                   header("location:index.php");
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