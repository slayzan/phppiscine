<?php
if(isset($_POST['signup-submit']))
{	$dBServername = "localhost:8100";
    $dBUsername = "root";
    $dBPassword = "123456";
    $dBName = "loginsystem";

	  $conn = new PDO('mysql:host=localhost:8100;dbname=loginsystem;charset=utf8', 'root', '123456');
     if (!$conn)
    {
         die("Coonection failed ");
     }
    else
    {
        phpinfo();
    }
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat))
    {
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../signup.php?error=invalidemails&uid=".$username."&mail=".$email);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        header("Location: ../signup.php?error=invalidusername&uid=".$username."&mail=".$email);
        exit();
    }
    else if ($password !== $passwordRepeat)
    {
        header("Location: ../signup.php?error=passworderror&uid=".$username."&mail=".$email);
        exit();
    }
    else
    {   
        if(!$req = $conn->prepare('SELECT * FROM users WHERE uidUsers=?;'))

            header("Location: ../signup.php?error=errorsql");
            exit();
        }
        else
        {   
            header("Location: ../signup.php?error=suceed");
            // mysql_stmt_bind_paran($stmt, "s", $mailuid);
            // mysql_stnt_execute($stmt);
            // mysql_stmt_store_result($stmt);
            // $resultCheck = mysql_stmt_store_result($stmt);
            // if ($resultCheck > 0)
            // {
            //     header("Location: ../signup.php?error=usertaken&mail=".$email);
            //     exit();
            // }
        }
        header("Location: ../signup.php?error=suceed");
        exit();
    }
}