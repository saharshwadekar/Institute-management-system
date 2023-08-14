<!-- write action="login_check.php" method="POST" in form of login page -->

<?php
if (isset($_POST['login'])) {
error_reporting(0);
session_start();
$_SESSION['login'] = true;

// connecting to the server
$host ="localhost";
$user ="root";
$password="";
$db = "institute-management-system";  // please provide the Database Name here

$data = mysqli_connect($host,$user,$password,$db);

if($data == false){   // Checking wheather the data base is connected succesfully
    die("Connection Error I'm in login_check.php");
}

if($_SERVER['REQUEST_METHOD'] == "POST")   // it will proceed only if the Login Button is pressed
{
    $email = $_POST['useremail']; // username is declared in login page in html input type ''' name = "username" '''
    $pass = $_POST['userpass']; // pasword is declared in login page in html input type ''' name = "password" '''
    $sql = "select * from user WHERE email = '".$email."' AND password = '".$pass."' ";  // <- this is from the Data Base table_user

    $result = mysqli_query($data,$sql);
    $row = mysqli_fetch_array($result);

    if($row["user_type"] == "student"){ // usertype is from Database table_user
        $_SESSION['useremail'] = $email;
        $_SESSION['usertype'] = "student";
        header("location:../Student/index.php");
    }
    elseif($row["user_type"] == "teacher"){ // usertype is from Database table_user
        $_SESSION['useremail'] = $email;
        $_SESSION['usertype'] = "teacher";
        header("location:../Teacher/index.php");
    }
    elseif ($row["user_type"] == "admin") {
        $_SESSION['useremail'] = $email;
        $_SESSION['usertype'] = "admin";
        header("location:../Admin/index.php");
    }
    else{
        $_SESSION['loginMessage'] = "username or Password do not match!";
        header("location:../Login/login.php");
    }
}

}
?>