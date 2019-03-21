<?php
// Tạo ra 1 số ngẫu nhiên nằm trong khoảng 1->100
$randomNumber = rand(1, 100);
// $randomNumber = 18;
// hiển thị giá trị của biến đã tạo ở trên
var_dump($randomNumber);

// nếu số vừa tạo chia hết cho 2 thì là số chẵn
if($randomNumber%2 == 0 ){
    echo "Số chẵn";
}else{
    echo "Số lẻ";
}

// nếu số vừa tạo không chia hết cho 2 thì là số lẻ
// if($randomNumber%2 != 0){
//     echo "số lẻ";
// }


?>