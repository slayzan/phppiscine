<?php

if(isset($_POST['signup-submit']))
{	
	require "dbh.inc.php";
	
    $username = $_post['uid'];
    $email = $_post['mail'];
    $password = $_post['pwd'];
    $passwordRepeat = $_post['pwd-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat))
    {
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
}
echo "hello";