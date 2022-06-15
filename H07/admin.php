<?php
session_start();
if(isset($_SESSION["user"]) && $_SESSION["user"]["rol"] = "administrator"){
    echo "<H1>welkom " . $_SESSION["user"]. " op het admin gedeelte van de website</H1>";
    echo "<p> <a href='opdracht01.php'>login</a></p>";
}else {
    header('locatie: opdracht01.php');
}