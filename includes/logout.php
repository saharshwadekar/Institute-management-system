<?php
session_start();
$_SESSION['login'] = false;
session_destroy();
header("Refresh:0, url =../Login.login.php"); 
?>