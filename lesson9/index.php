<?php
// 1. Tạo kết nối tới csdl
$conn = new PDO("mysql:host=127.0.0.1;dbname=pt14211;charset=utf8", "root", "123456");

// 2. Chuẩn bị câu sql để lấy dữ liệu
$sqlQuery = "select * from students";

// 3. Nạp câu truy vấn vào trong kết nối
$statement = $conn->prepare($sqlQuery);

// 4. Thực thi câu lệnh với csdl
$statement->execute();

// 5. Thu thập kết quả trả về
$result = $statement->fetchAll();

?>
<form action="search.php" method="get">
    <input type="text" name="keyword">
    <button type="submit">Tìm kiếm</button>
</form>
<table>
    <tr>
        <th>ID</th>
        <th>Tên sv</th>
        <th>Chuyên ngành</th>
        <th>Tên lớp</th>
        <th>Mã Sv</th>
        <th>Điểm trung bình</th>
        <th>Địa chỉ</th>
    </tr>
    <?php foreach ($result as $key => $value):?>
        <tr>
            <td><?= $value['id']?></td>
            <td><?= $value['name']?></td>
            <td><?= $value['factor']?></td>
            <td><?= $value['class_name']?></td>
            <td><?= $value['student_code']?></td>
            <td><?= $value['avg_score']?></td>
            <td><?= $value['address']?></td>
        </tr>
    <?php endforeach?>
</table>