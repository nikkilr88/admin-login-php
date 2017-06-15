<?php

session_start();

if(!isset($_SESSION['pass'])) {
    header('location: index.html');
}

?>


<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h1>Welcome, Admin!</h1>
        
        <form action="logout.php" action="post">
            <input type="submit" value="Logout"/>
        </form>
    </body>
</html>