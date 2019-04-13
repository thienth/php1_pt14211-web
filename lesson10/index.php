<?php
session_start();
$user_table = [
    [
        "id" => 1,
        "username" => 'thienth',
        "password" => '123456'
    ],
    [
        "id" => 2,
        "username" => 'linhtd',
        "password" => '0987654321'
    ],
    [
        "id" => 3,
        "username" => 'sontt',
        "password" => 'sondeptrai'
    ]
];
// thu thap thong tin tu form gui len
$username = $_POST['username'];
$pwd = $_POST['pwd'];

// Tạo ra biến cờ để xác định xem thông tin gửi lên khớp với phần tử nào
// trong mảng user_table
$flag = -1;
foreach ($user_table as $key => $value) {

    // Nếu so khớp thông tin gửi lên với phần tử đang được xét ($value)
    if($value['username'] == $username && $value['password'] == $pwd){
        // gán lại giá trị cho $flag bằng index của phần tử được xét
        $flag = $key;
        // thoát khỏi vòng lặp
        break;
    }
}

// tìm thấy phần tử trong mảng
if($flag != -1){
    // tạo session user_info
    $_SESSION['user_info'] = $user_table[$flag];
}else{ // không tìm thấy phần tử thỏa mãn thông tin gửi lên

    // điều hướng website về trang login với thông báo sai thông tin
    header('location: login.php?err=Sai thong tin tai khoan');
    die;
}
echo "Xin chao user: " . $_SESSION['user_info']['username'];

?>