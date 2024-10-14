<?php

$a = $_GET["a"] ; 
$b = $_GET["b"] ; 
$c = $_GET["c"] ; 


$totala = $a * 30; 
$totalb = $b * 70; 
$totalc = $c * 30; 


$total = $totala + $totalb + $totalc; 


echo "<b> ราคารวม </b> คือ " ;
echo $total ;
echo " บาท";
?>
