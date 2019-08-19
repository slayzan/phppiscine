<?php
// $now = mktime(0,0,0,1,1,1970);
$time = argv[1];

if (date_available($argv[1]))
{
    
}
else
    echo "Wrong format";
$second = $now - $time;
// echo $second;

function date_available($argv)
{   
    if (preg_match("/^[a-zA-Z]+ [0-9]{2} [a-zA-Z]+ [0-9]{4}$/", $argv))
        return (1);
    return (0);
}
?>

