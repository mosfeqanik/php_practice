<?php
$a = 1;
$b = 2;
function Sum()
{
    global $a, $b;

    $c = $a + $b;
    echo $a."</br>";
    echo $b."</br>";
    echo $c."</br>";
} 

Sum();
echo $a."</br>";
echo $b."</br>";


$d = 10;
$e = 20;

function Sum1()
{
    $GLOBALS['f'] = $GLOBALS['d'] + $GLOBALS['e'];
    echo $GLOBALS['f']."</br>";
    echo $GLOBALS['d']."</br>";
    echo $GLOBALS['e']."</br>";
} 

Sum1();
echo $d."</br>";
echo $e."</br>";
echo $f."</br>";

?>