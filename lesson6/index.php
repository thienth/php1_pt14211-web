<?php 

$a = 5;
function test(&$b){
    $b = $b + 5;

    echo $b . "<br>";
}
test($a);
echo $a;
// php built-in string, array, math, date, number
?>