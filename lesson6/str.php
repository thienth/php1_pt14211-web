<?php
$str = '     something     ';
$str2 = "te,,,,st,,,,";
var_dump($str);
var_dump(trim($str));
var_dump(ltrim($str));
var_dump(rtrim($str));
var_dump(rtrim($str2, ','));

$str3 = "thienth dep trai";
var_dump(strtoupper($str3));

var_dump(round(2.447, 2));


?>