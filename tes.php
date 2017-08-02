<?php
session_start();
require_once("connection.php");
if ($_SESSION['email']=='') {
    header("location: index.php");
  }else{
    mysql_error();
  }

  include("lib_function.php");

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
            <li class="men1"><a href="index.php">Exit</a><strong class="hover"></strong></li>
            <?php 
            $cek = cek_login();
            
            if ($cek == 0){
              echo "<li class=\"men4\"><a href=\"index.php\">Login</a> <strong class=\"hover\"></strong></li>";
            }else{
              echo "<li class=\"men4\"><a href=\"proseslogout.php\">Logout</a> <strong class=\"hover\"></strong></li>";
            }
          ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<!--End Header-->

<!-- Start Page -->
<div id="page2" class="content"> 
  <div class="container_12">
  <div class="grid_14">
    <div class="box">
      <?php 
        $email =$_SESSION['email']; 
        $query = mysql_query("SELECT * FROM user where email='$email'");
          if ($query) {
            while ($row = mysql_fetch_array($query)) {
              echo "<div class=\"slogan\" style='margin-top:-40px;'>
                    <h3>Welcome, <span>".$row['nname']."</span></h3></div>";
                        }
                      }
      ?>

         <div style="background-color:#666666; font-size:17px; margin-top:-50px;color:white; margin-left:150px; width:620px; padding:5px 0">? Test Direction
         <div class="box3">
         <div class="text2">Tes ini memiliki tiga bagian yaitu structure, reading serta listening dan akan memakan waktu Sekitar 25-55 menit untuk menyelesaikannya. Pertama sekali anda akan melakukan tes structure, kemudian dilanjutkan dengan tes listening dan di akhiri tes reading. <br><br>
         Pada bagian Structure and Written Expression, Anda harus menjawab 40 pertanyaan dengan waktu 25 menit. 
         Pada bagian Reading, Anda harus menjawab 50 pertanyaan dengan waktu 55 menit. 
         Pada bagian Listening, Anda harus menjawab 50 pertanyaan dengan waktu 40 menit. <br><br>
         Silahkan masukkan email lengkap anda sama seperti email saat login: <br></div>
         
         <form method="POST" action="add_id.php">
         <input type="text" name="email" placeholder="Email" style="width:300px; margin-left:130px; height: 25px; font-size:14px; color:black; font-family: Trebuchet Ms;">
         <br><br><br><input style="width:200px; margin-left:180px; height:30px; border:1px; font-family:'Trebuchet MS'; font-size:24px;" name="btn" type="submit" value="Start"/>
         </form>
         
         </div>
         </div>
    </div> 
  </div>
  </div>
</div>
<!-- End Page -->

<footer>
      <div class="copy2"></a> &copy; Febriani F Damanik (132406106) <br> </div>
</footer>
</body>
</html>