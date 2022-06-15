<?php
    session_start();

    if(isset($_SESSION["user"])){
        echo "<h1>Welcome ".$_SESSION["user"]["naam"]. " op de website.</h1>";
        echo "<p><a href= 'opdracht01.php'>back</a></p>";
    }else{
        header('location: opdracht01.php');
    }
    