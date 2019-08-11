<?php 
echo "Hello World\n";
?>

<?php

$i = 1;
while($i < 1000){
	echo "X";
	$i++;
}
echo "\n";
?>

<?php 

	$header = fopen('php://stdin', 'r');
while ($header && !feof($header);)
{
    echo"Entrer un nombre\n";
    $nbr = fgets($header);
    if ($nbr)
    {
    	$number = str_replace("\n", "", "$number");
        if(is_numeric($nbr))
        {
            if ($nbr % 2 == 0)
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

<?php
function ft_split($str)
    {
        $tab = str_split(explode(" ", $str));
        sort($tab);
        return $tab;   
    }
?>

<?php
	 for($i = 1; $i < $argc; $i++)
   echo $argv[$i] . "\n";
?>
<?php
if ($argc == 2) {
	$str = trim($argv[1]);
	$str = preg_replace("/[ ]+/", " ", $str);
	echo $str . "\n";
}
?>

<?php
if ($argc > 1) {
	$str = implode(" ", array_slice($argv, 1));
	$arr = preg_split("/[ ]+/", $str);
	sort($arr);
	echo implode("\n", $arr) . "\n";
}
?>

<?php
if ($argc > 1) {
	$arr = preg_split("/[ ]+/", $argv[1]);
	array_push($arr, array_shift($arr));
	echo implode(" ", $arr) . "\n";
}
?>
<?php
function ft_is_sort($tab) {
	$sorted_tab = array_slice($tab, 0);
	sort($sorted_tab);
	return ($tab == $sorted_tab);
}
?>