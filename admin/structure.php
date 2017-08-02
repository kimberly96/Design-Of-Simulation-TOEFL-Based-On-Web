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
               <div class="row">
                    <div class="text1">TOEFL Test - Structure,</div>
                    <form id="list-form">
                    <a href="#" style="text-decoration:none; font-size:18; color:#666666" onclick="showTambahForm()">Add Question</a><br><br> 
                    <table class="table">
                        <thead>
                        <tr>
                         <th style="width:30px">No</th>
                         <th>Question</th>
                         <th style="width:90px">A</th>
                         <th style="width:90px">B</th>
                         <th style="width:90px">C</th>
                         <th style="width:90px">D</th>
                         <th style="width:50px">Answer</th>
                         <th style="width:50px">Button</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        include "conection.php";
                        
                        $query = mysql_query("SELECT * FROM structure");
                        if ($query) {
                        while ($row = mysql_fetch_array($query)) {
                            echo "
                                <tr>
                                    <td>".$row['no']."</td>
                                    <td>".$row['pertanyaan']."</td>
                                    <td>".$row['a']."</td>
                                    <td>".$row['b']."</td>
                                    <td>".$row['c']."</td>
                                    <td>".$row['d']."</td>
                                    <td>".$row['jawaban']."</td>
                                    <td>
                                        <a href=\"edit_structure.php?id=".$row['no']."\">Edit</a> |
                                        <a href=\"hapus_structure.php?id=".$row['no']."\">Delete</a>
                                    </td>
                                </tr>";
                              
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                    </form>
                    <form id="tambah-form" method="POST" action="tambah_structure.php" style="display:none;">
                    <a href="#" style="text-decoration:none; font-size:18; color:#666666" onclick="showListForm()">Back</a><br><br>
                    <table class="tambah">
                    <tr>
                    <td><br>No</td>
                    <td><br><textarea class="ini" type="text" name="no"></textarea></td>
                    </tr>
                    <td><br>Pertanyaan</td>
                    <td id><br><textarea class="in" name="pertanyaan" cols="100" rows="4"></textarea></td>
                    </tr>
                    <tr>
                    <td><br>Pilihan (a)</td>
                    <td><br><textarea class="ini" type="text" name="a" cols="60" rows="3"></textarea></td>
                    </tr>
                    <tr>
                    <td><br>Pilihan (b)</td>
                    <td><br><textarea class="ini" type="text" name="b" cols="60" rows="3"></textarea></td>
                    </tr>
                    <tr>
                    <td><br>Pilihan (c)</td>
                    <td><br><textarea class="ini" type="text" name="c" cols="60" rows="3"></textarea></td>
                    </tr>
                    <tr>
                    <td><br>Pilihan (d)</td>
                    <td><br><textarea class="ini" type="text" name="d" cols="60" rows="3"></textarea></td>
                    </tr>
                    <tr>
                    <td><br>Jawaban</td>
                    <td><br><textarea class="ini" type="text" name="jawaban" size="1" cols="60" rows="3"></textarea>
                    </td></tr>
                    <tr><td><br><div class="btns"><input type="submit" value="Simpan Soal"></td></div></tr>
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