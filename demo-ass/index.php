<?php
require_once "./db.php";
$sql = "select * from students";
$result = queryExecute($sql, true);


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
        <th>
            <a href="add.php">Thêm mới</a>
        </th>
    </tr>
    <?php foreach ($result as $key => $value):?>
        <tr>
            <td><?= $value['id']?></td>
            <td><?= ucwords($value['name']) ?></td>
            <td><?= $value['factor']?></td>
            <td><?= $value['class_name']?></td>
            <td><?= $value['student_code']?></td>
            <td><?= $value['avg_score']?></td>
            <td><?= $value['address']?></td>
            <td>
                <a href="edit.php?id=<?= $value['id'] ?>">Sửa</a>
                <a href="javascript:;" url="remove.php?id=<?= $value['id']?>" onclick="return confirmDelete(this)">Xóa</a>
            </td>
        </tr>
    <?php endforeach?>
</table>
<script>
    function confirmDelete(el){
        var url = el.getAttribute('url');
        var conf = confirm('Ban co chac chan muon xoa phan tu nay?');
        if(conf == true){
            window.location.href = url;
        }else {
            return false;
        }
    }
</script>