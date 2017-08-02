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
    <script type="text/javascript">
    var showListForm = function() {
      document.getElementById("list-form").setAttribute("style", "display:block");
      document.getElementById("tambah-form").setAttribute("style", "display:none");
      document.getElementById("edit-form").setAttribute("style", "display:none");
    }
    </script>
    <script type="text/javascript">
    var showTambahForm = function() {
      document.getElementById("list-form").setAttribute("style", "display:none");
      document.getElementById("tambah-form").setAttribute("style", "display:block");
      document.getElementById("edit-form").setAttribute("style", "display:none");
    }
    </script>
    <script type="text/javascript">
    var showEditForm = function() {
      document.getElementById("list-form").setAttribute("style", "display:none");
      document.getElementById("tambah-form").setAttribute("style", "display:none");
      document.getElementById("edit-form").setAttribute("style", "display:block");
    }
    </script>
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
                    <div class="text1">Admin Profile</div>
                    <form id="list-form">
                    <a href="#" style="text-decoration:none; font-size:18; color:#666666" onclick="showEditForm()">Edit </a>  | <a href="#" style="text-decoration:none; font-size:18; color:#666666" onclick="showTambahForm()">Add New Admin</a><br><br> 
                    <table class="table">
                        
                            <?php 
                            include "conection.php";
                            $user = $_SESSION['user'];
                            $query = mysql_query("SELECT * FROM admin where user='$user'");
                            if ($query) {
                                while ($row = mysql_fetch_array($query)) {
                                    echo "
                                    <tr><td>User ID  </td><td>  : ".$row['user']."</td></tr>
                                    <tr><td>Password  </td><td> :  ".$row['password']."</td></tr>
                                    <tr><td>Nama </td><td> :  ".$row['nama']."</td></tr>
                                    <tr><td>Email </td><td>  : ".$row['email']."</td></tr>
                                    ";
                                }
                            }
                            ?>

                    </table>
                </form>

                <form id="tambah-form" method="POST" action="tambah_admin.php" style="display:none;">
                    <a href="#" style="text-decoration:none; font-size:18; color:#666666" onclick="showListForm()">Back</a><br><br>
                    <table class="tambah">
                    <tr>
                    <td><br>User</td>
                    <td><br><textarea class="ini" type="text" name="user" cols="60" rows="3"></textarea></td>
                    </tr>
                    <tr>
                    <td><br>Password</td>
                    <td><br><textarea class="ini" type="text" name="password" cols="60" rows="3"></textarea></td>
                    </tr>
                    <tr>
                    <td><br>Nama</td>
                    <td><br><textarea class="ini" type="text" name="nama" cols="60" rows="3"></textarea></td>
                    </tr>
                    <tr>
                    <td><br>Email</td>
                    <td><br><textarea class="ini" type="text" name="email" cols="60" rows="3"></textarea></td>
                    </tr>
                    <tr><td><br><div class="btns"><input type="submit" value="Tambah Admin"></td></div></tr>
                    </table>
                    </form>

                    <form id='edit-form' style='display:none;' action ="prosesedit_admin.php" method="POST">
                        <a href="#" style="text-decoration:none; font-size:18; color:#666666" onclick="showListForm()">Back</a> 
                            <table class="tambah">
                              <?php 
                              $user = $_SESSION['user'];
                              $query = mysql_query("SELECT * FROM admin where user='$user'");
                              if ($query) {
                                while ($row = mysql_fetch_array($query)) {
                                  echo "
                                  <tr><td>User ID </td><td><br><input class=\"ini\" type=\"text\" name=\"user\" value=\"".$row['user']."\" ></td></tr>
                                  <tr><td>Password </td><td><br><input class=\"ini\" type=\"text\" name=\"password\" value=\"".$row['password']."\" ></td></tr>
                                  <tr><td>Nama </td><td><br><input class=\"ini\" type=\"text\" name=\"nama\" value=\"".$row['nama']."\" ></td></tr>
                                  <tr><td>Email </td><td><br><input class=\"ini\" type=\"text\" name=\"email\" value=\"".$row['email']."\" ></td></tr><br><br>
                                  <tr><td><br><input style=\"width:100px; height:30px; border:1px; font-family:'Trebuchet MS'; font-size:16px;\" type=\"submit\" value=\"Save\">
                                  </td></tr>
                              ";}}
                              ?>

                             </table><br><br>
                          </div>
                    </form>
               </div>
            </div>
        </div><br><br><br>
        <div id="footer">
            <div style="padding-top:7px; padding-left:550px; color:#666666;">132406106 - Febriani F Damanik</div>
        </div>
    </div>
</body>
</html>