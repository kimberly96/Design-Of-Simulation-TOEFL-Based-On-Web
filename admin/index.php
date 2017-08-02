<?php
session_start();
require_once("conection.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TOEFL ADMIN</title>
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
      <div id="login">
              <form class="form-login" action="proseslogin.php" method="POST">
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                    <input class="log" type="text" class="form-control" name="user" placeholder="Admin ID" autofocus>
                    <br><br>
                    <input class="log" type="password" class="form-control" name="password" placeholder="Password"><br>
                    <input class="form-login-heading" value="SIGN IN" type="submit">
                </div>        
              </form>       
        </div>
  </body>
</html>
