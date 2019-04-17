<?php
session_start();
if(isset($_SESSION['auth']) == false || $_SESSION['auth'] == null){
    header('location: login.php');
    die;
}

/**
 * sinh ra 1 giao dien 
 * 1. giup nguoi dung sua thong tin cũ của students
 * 2. giao diện cần show thông tin cũ của students được chọn để sửa
 * 3. Gửi thông tin của student lên server để lưu trữ
 */
require_once "./db.php";
$id = $_GET['id'];

// lấy thông tin người dùng theo id
$sql = "select * from students where id = $id";
$student = queryExecute($sql, false);

?>

<form action="save-edit.php" method="get">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div>
        <label for="">Tên sv</label>
        <input type="text" name="name" value="<?= $student['name']?>">
    </div>
    <div>
        <label for="">Ngành học</label>
        <select name="factor" >
            <option
                <?php if($student['factor'] == "TKW"):?>
                    selected
                <?php endif ?>
                value="TKW">Thiết kế website</option>
            <option 
                <?php if($student['factor'] == "UDCNTT"):?>
                    selected
                <?php endif ?>
            value="UDCNTT">Ứng dụng công nghệ thông tin</option>
            <option
                <?php if($student['factor'] == "LTMT"):?>
                    selected
                <?php endif ?>
                value="LTMT">Lập trình máy tính</option>
        </select>
    </div>
    <div>
        <label for="">Tên lơp</label>
        <input type="text" name="class_name" value="<?= $student['class_name']?>">
    </div>
    <div>
        <label for="">Mã sv</label>
        <input type="text" name="student_code" value="<?= $student['student_code']?>">
    </div>
    <div>
        <label for="">Điểm trung bình</label>
        <input type="number" name="avg_score"  value="<?= $student['avg_score']?>">
    </div>
    <div>
        <label for="">Địa chỉ</label>
        <input type="text" name="address" value="<?= $student['address']?>">
    </div>
    <div>
        <button type="submit">Lưu</button>
        <a href="index.php">Hủy</a>
    </div>
</form>