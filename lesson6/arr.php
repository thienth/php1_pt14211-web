<?php
$arr = [
    0 => "test arr",
    'name' => 'fpt poly',
    'age' => 8
];

$arr2 = [];

var_dump($arr);
$arr['address'] = '15 dong quan';


var_dump($arr);

$arr['address'] = '8 ham nghi';

var_dump($arr);

$arr[] = 'pt14211';
var_dump($arr);

var_dump($arr['age']);


$arr3 = [5,7,9,4];
$arr3 = [];
for($i = 0; $i < 10; $i++){
    $arr3[] = rand(1, 100);
}

$arr3['ten'] = 'cuong';
$arr3['tuoi'] = 20;
$arr3['diachi'] = 'ham nghi';
$arr3['hocky'] = 'Spring 2019';

var_dump($arr3);

    foreach ($arr3 as $key => $value) {
        echo "$key - $value <br>";
    }


?>

<ul>
    <?php foreach ($arr3 as $key => $value): ?>
        <li><?= $key ?> - <?= $value ?></li>
    <?php endforeach ?>
</ul>