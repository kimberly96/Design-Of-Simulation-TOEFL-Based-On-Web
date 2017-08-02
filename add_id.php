<?php
    session_start();
    include "connection.php";
    $email = $_POST['email'];

    $query = "INSERT INTO id(email) VALUES ('$email')";
    if(mysql_query($query)){
         $id = mysql_insert_id();
         $_SESSION['id'] = $id;

        header("location:test_structure.php");
    }
    else {
        echo mysql_error();
    }
?>