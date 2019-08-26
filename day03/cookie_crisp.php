<?php
if($_COOKIE[$_GET['name']])
{
  
    if ( $_GET['action'] == 'get' && $_GET['name'] && $_COOKIE[$_GET['name']] && !$_GET['value']) 
        echo $_COOKIE[$_GET['name']]."\n";
    if ($_GET['action'] == 'del')
        setcookie($_GET['name'], '', 1);
}
else
{
    if ($_GET['action'] == 'set')
    {
        setcookie($_GET['name'], $_GET['value']);
        echo 'dine';
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>menu</title>
</head>
<body>
    <p></p>
</body>