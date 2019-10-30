<?php

echo"welke facultijd wil je berekenen?\n";
$getal = readline ();
$total = 1;
$i = 1;

while ($i <= ($getal-1)){
    $i++;
    $total = $i * $total;
}

echo "$total"



?>