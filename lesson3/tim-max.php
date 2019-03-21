<?php
$a = $_POST['soa'];
$b = $_POST['sob'];
$c = $_POST['soc'];

$max1 = $a > $b ? $a : $b;
$max2 = $max1 > $c ? $max1 : $c;

echo $max2;


?>