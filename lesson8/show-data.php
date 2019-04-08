<?php
$student_name = $_POST['student_name'];
$city = $_POST['city'];
$hometown = $_POST['hometown'];
$detail = $_POST['detail'];
$family_status = $_POST['family_status'];
$favorite = $_POST['favorite'];
$fStr = implode(', ', $favorite);

var_dump($_FILES['avatar']);die;

$img = "uploads/anh-cuoi.jpg";
?>
<h3><?= $student_name?></h3>
<p>Tình trạn hôn nhân: <?= $family_status?></p>
<p>Sở thích: 
        <b><?= $fStr?></b> 
</p>
<p>Quê quán: <?= $hometown?>, <?= $city?></p>
<p>Giới thiệu bản thân: <?= $detail?></p>
<img src="<?= $img?>" width="500">