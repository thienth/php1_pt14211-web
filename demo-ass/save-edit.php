<?php

session_start();
if(isset($_SESSION['auth']) == false || $_SESSION['auth'] == null){
    header('location: login.php');
    die;
}

require_once "./db.php";

// 1. thu thập data từ form
$id = $_GET['id'];
$name = $_GET['name'];
$factor = $_GET['factor'];
$class_name = $_GET['class_name'];
$student_code = $_GET['student_code'];
$avg_score = $_GET['avg_score'];
$address = $_GET['address'];
// 1.5. Validate dữ liệu

// 2. dựa vào thông tin thu thập được, tạo câu lệnh sql insert
$sql = "update students 
        set
            name = '$name',
            factor = '$factor', 
            class_name = '$class_name',  
            
            student_code = '$student_code',  
            avg_score = '$avg_score', 
            address = '$address'
        where id = $id";

// var_dump($sql);die;

// 3. thực thi câu lệnh vừa tạo với csdl
queryExecute($sql);

// 4. điều hướng website về trang danh sách
header('location: index.php');
?>