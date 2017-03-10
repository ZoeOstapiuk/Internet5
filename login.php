<?php
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        $myusername = $_POST['name']; 
        $mypassword = $_POST['password']; 

        if($myusername == '1')
        {
            $_SESSION['login_user'] = $myusername;
            header("location: index.php");
        }
        else 
        {
            header("location: login.html");
        }
    }
?>
