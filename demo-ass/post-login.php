<?php
session_start();
// 1. ket noi csdl
require_once "./db.php";
// 2. lay du lieu tu form
$username = $_POST['username'];
$password = $_POST['password'];

// 3. so sanh voi csdl
$sql = "select * 
        from users 
        where 
            username = '$username' 
            and 
            password = '$password'";
$user = queryExecute($sql, false);

// 4. tao session
if($user != false){
    $_SESSION['auth'] = $user;
    header('location: index.php');
    die;
}
header('location: login.php?err=Sai thong tin tai khoan/mat khau');


?>