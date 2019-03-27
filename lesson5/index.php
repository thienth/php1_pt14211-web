<?php

// dinh nghia ham sap xep mang
function sapxep($mang){
    for($i = 0; $i < count($mang) - 1; $i++ ){
        for($j = $i+1; $j < count($mang); $j++){
            if($mang[$i] > $mang[$j]){
                $tmp = $mang[$j];
                $mang[$j] = $mang[$i];
                $mang[$i] = $tmp;
            }
        }
    }

    return $mang;
}

// sinh ra 1 ham tao ra 1 mang gom x phan tu
// x la tham so truyen vao
function randomArr($soLuongPhanTu, $min, $max){
    $arr = [];
    for($i = 0; $i < $soLuongPhanTu; $i++){
        $arr[] = rand($min, $max);
    }

    return $arr;
}

$mang = randomArr(10, 20, 50);
var_dump($mang);

$mang = randomArr(50, 1, 1000);
var_dump(sapxep($mang));
?>