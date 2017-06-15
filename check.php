<?php 

$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == 'admin' && $pass == 'password') {
    session_start();

    $_SESSION['user']="user";
    $_SESSION['pass']="pass";
    header('location: admin.php');
} else {
    echo "Incorrect login information. Please try again.";
}

?>