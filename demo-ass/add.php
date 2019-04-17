<?php
session_start();
if(isset($_SESSION['auth']) == false || $_SESSION['auth'] == null){
    header('location: login.php');
    die;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="save-add.php" method="get">
        <div>
            <label for="">Tên sv</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Ngành học</label>
            <select name="factor" >
                <option value="TKW">Thiết kế website</option>
                <option value="UDCNTT">Ứng dụng công nghệ thông tin</option>
                <option value="LTMT">Lập trình máy tính</option>
            </select>
        </div>
        <div>
            <label for="">Tên lơp</label>
            <input type="text" name="class_name">
        </div>
        <div>
            <label for="">Mã sv</label>
            <input type="text" name="student_code">
        </div>
        <div>
            <label for="">Điểm trung bình</label>
            <input type="number" name="avg_score">
        </div>
        <div>
            <label for="">Địa chỉ</label>
            <input type="text" name="address">
        </div>
        <div>
            <button type="submit">Lưu</button>
            <a href="index.php">Hủy</a>
        </div>
    </form>
</body>
</html>