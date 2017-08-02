<?php
session_start();
require_once("conection.php");

if ($_SESSION['user']=='') {
    header("location: index.php");
  }else{
    mysql_error();
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
    }
    </script>
    <script type="text/javascript">
    var showTambahForm = function() {
      document.getElementById("list-form").setAttribute("style", "display:none");
      document.getElementById("tambah-form").setAttribute("style", "display:block");
    }
    </script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <div id="banner">
        </div>
        <div id="sidebar">
            <ul class="sidebar-menu">
            <a href="index.php" class="logo"><b>Admin Panel</b></a><br>
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
               <div class="row mt">
                <div class="col-lg-12">
                    <div class="text1">TOEFL Test - Structure,</div>
                     <form action="prosesedit_structure.php" method="post">
                    <table>
                        <a href="reading.php" style="text-decoration:none; font-size:18; color:#666666">Cancel</a><br><br>
                        <tbody class="tambah">
                        <?php
                        include "conection.php";
                        $no=$_GET['id'];    
                        ?>

                        <?php
                            $query=mysql_query("select * from structure where no='$no'");
                            if ($query) {
                            while ($row = mysql_fetch_array($query)) {
                                echo "
                                <tr>
                                    <td style=\"width:120px\">No</td>
                                    <td><input class=\"edit\"type=\"text\" name=\"no\" value=\"".$row['no']."\" style=\"width:50px; height:30px;\">
                                    </td></tr>
                                <tr><td>Question</td>
                                    <td><input type=\"text\" name=\"pertanyaan\" value=\"".$row['pertanyaan']."\" style=\"width:900px; height:100px;\">
                                    </td></tr>
                                <tr><td>A</td>
                                    <td><input type=\"text\" name=\"a\" value=\"".$row['a']."\" style=\"width:500px; height:60px;\"></td></tr>
                                <tr><td>B</td>
                                    <td><input type=\"text\" name=\"b\" value=\"".$row['b']."\" style=\"width:500px; height:60px;\"></td></tr>
                                <tr><td>C</td>
                                    <td><input type=\"text\" name=\"c\" value=\"".$row['c']."\" style=\"width:500px; height:60px;\"></td></tr>
                                <tr><td>D</td>
                                    <td><input type=\"text\" name=\"d\" value=\"".$row['d']."\" style=\"width:500px; height:60px;\"></td></tr>
                                <tr><td>Answer</td>
                                    <td><input type=\"text\" name=\"jawaban\" value=\"".$row['jawaban']."\" style=\"width:500px; height:60px;\"></td></tr>
                                <tr><td><br><div class=\"btns\"><input type=\"submit\" value=\"update\">
                                    </div></td></tr>
                                ";
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                    </form>
                </div>
               </div>
            </div>
        </div>
        <div id="footer" style="margin-top:30px;">
            <div style="padding-top:7px; padding-left:550px; color:#666666;">132406106 - Febriani F Damanik</div>
        </div>
    </div>
</body>
</html>
                