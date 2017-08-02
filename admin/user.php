<?php
session_start();
require_once("conection.php");

if ($_SESSION['user']=='') {
    header("location: index.php");
  }else{
    mysql_error();
  }

if (session_status() == PHP_SESSION_NONE  || session_id() == '') {
        session_start();
    }
?>

<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<div id="banner">
		</div>
		<div id="sidebar">
			<ul class="sidebar-menu">
            <a href="home.php" class="logo"><b>Admin Panel</b></a><br>

            <?php 
            $user = $_SESSION['user'];
            $query = mysql_query("SELECT * FROM admin where user='$user'");
                if ($query) {
                  while ($row = mysql_fetch_array($query)) {
                    echo "<h5 class=\"centered\">Welcome,<br> <span>".$row['nama']."</h5>";
                }}
            ?>

        	<div class="mt">
                <a class="active" href="listening.php">Listening</a>
            </div>
            <div class="mt">
                <a class="active" href="reading.php">Reading</a>
            </div>
            <div class="mt">
                <a class="active" href="structure.php">Structure</a>
            </div>
            <div class="mt">
                <a class="active" href="user.php">Data User</a>
            </div>
            <div class="mt">
                <a class="active" href="profil.php">Profile</a>
            </div>
            <div class="mt">
                <a class="active" href="logout.php">Log Out</a>
            </div>
		</div>
        <div id="main-content">
            <h3><span>> Welcome,</span></h3>
            <div class="wrapper">
               <div class="row" style="margin-bottom:250px;">
                    <div class="text1">Data User, </div>
                    <table class="table">
                        <thead>
                        <tr>
                         <th style="width:20px">No</th>
                         <th>Nama</th>
                         <th>Email</th>
                         <th>Birthday</th>
                         <th>Gender</th>
                         <th>Button</th>
                        </tr>
                        </thead>
                        <tbody>
                             <?php 
                            include "conection.php";
                            $no = 1;
                            $query = mysql_query("SELECT * FROM user");
                            if ($query) {
                                while ($row = mysql_fetch_array($query)) {
                                    echo "
                                    <tr>
                                        <td>".$no."</td>
                                        <td>".$row['nama']."</td>
                                        <td>".$row['email']."</td>
                                        <td>".$row['bln']."</td>
                                        <td>".$row['gender']."</td>
                                        <td>
                                        <a href=\"hapus_user.php?id=".$row['email']."\">Delete User</a>
                                    </td>
                                    </tr>
                                    ";

                                $no++;
                                }
                            }
                            ?>
                    </tbody>
                    </table>
               </div>
            </div>
        </div><br><br><br>
        <div id="footer">
            <div style="padding-top:7px; padding-left:550px; color:#666666;">132406106 - Febriani F Damanik</div>
        </div>
    </div>
</body>
</html>