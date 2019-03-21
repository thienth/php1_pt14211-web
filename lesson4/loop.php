<?php
// show tat ca cac so nam trong khoang 4 - 13
/*$i = 5;
while($i <= 150){
    echo "$i <br>";
    $i++;
}

echo 'Ket thuc vong lap';
*/

/*$arr = [1,5,8,16,9,15,11];
$i = 0;
$max = $arr[0];
while($i <= 6){
    $currentValue = $arr[$i];
    if($max <= $currentValue){
        $max = $currentValue;
    }
    $i++;
}

echo "So lon nhat = $max";

$i = 99;
do{
    echo $i . "<br>";
    $i++;
}while($i < 50);

echo $i;
*/

$arr = [1,7,12,6,5,2];

// for($i = 0; $i < count($arr); $i++){
//     echo $arr[$i]. " <br>";
// }

for($i = count($arr) - 1; $i >= 0; $i--){
    echo $arr[$i]. " <br>";
}

// for($i = 0; $i < count($arr); $i++){
//     if($arr[$i]%2 == 0){
//         $chan += $arr[$i];
//     }else{
//         $le += $arr[$i];
//     }
// }
// echo $chan-$le;

// $i = 0;
// $chan = 0;
// $le = 0;
// while($i < 6){
//     if($arr[$i]%2 == 0){
//         $chan += $arr[$i];
//     }else{
//         $le += $arr[$i];
//     }
//     $i++;
// }



// $i = 0;
// $tong = 0;
// while($i <= 5){
//     $tong += $arr[$i];
//     $i++;
// }

// echo "Gia tri trung binh cua mang = " . $tong/6;


// $i = 0;
// $j = $i + 1;
// $tong = $arr[$i] + $arr[$j];
// while($i < 5){
//     // lay tong 2 so dang duoc xet
//     $currenTong = $arr[$i] + $arr[$j];
//     // so sanh tong dang co va tong ben ngoai
//     if($tong < $currenTong){
//         $tong = $currenTong;
//     }

//     $i++;
//     $j++;
// }

// echo "Tong lon nhat cua 2 so dung canh nhau = $tong";

?>