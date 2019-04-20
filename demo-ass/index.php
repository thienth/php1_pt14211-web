<?php
session_start();
require_once "./db.php";
$sql = "select * from students";
$result = queryExecute($sql, true);
?>

<?php if(isset($_SESSION['auth']) && $_SESSION['auth'] != null): ?>
<span >Hello, <?= $_SESSION['auth']['username']; ?> 
    <a href="logout.php">logout</a>
</span>
<?php else: ?>
<a href="login.php">Login</a>
<?php endif?>

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
        <?php if(isset($_SESSION['auth']) && $_SESSION['auth'] != null): ?>
        <th>
            <a href="add.php">Thêm mới</a>
        </th>
        <?php endif?>
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
            <?php if(isset($_SESSION['auth']) && $_SESSION['auth'] != null): ?>
            <td>
                <a href="edit.php?id=<?= $value['id'] ?>">Sửa</a>
                <a href="javascript:;" url="remove.php?id=<?= $value['id']?>" onclick="return confirmDelete(this)">Xóa</a>
            </td>
            <?php endif?>
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