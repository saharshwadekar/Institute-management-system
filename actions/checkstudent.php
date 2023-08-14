<?php 
    session_start();
    if(!isset($_SESSION['login']) or ($_SESSION['usertype']!='student'))
    {
        header('location:../Login/login.php');
    }
?>