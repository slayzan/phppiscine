<?php 
$header = fopen('php://stdin', 'r');
while ($header && !feof($header))
{
    echo"Entrer un nombre\n";
    $nbr = fgets($header);
    if ($nbr)
    {
    	$number = str_replace("\n", "", "$nbr");
        if(is_numeric($number))
        {
            if ($number % 2 == 0)
               echo "Le chiffre " . $number . " est Pair\n";
            else
                echo "Le chiffre " . $number . " est Impair\n";
        }
        else
            echo "'" . $number . "' n'est pas un chiffre\n";
    }
}
fclose($header);
echo"\n";
?>