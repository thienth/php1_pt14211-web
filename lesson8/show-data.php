<?php
$student_name = $_POST['student_name'];
$city = $_POST['city'];
$hometown = $_POST['hometown'];
$detail = $_POST['detail'];
$family_status = $_POST['family_status'];
$favorite = $_POST['favorite'];
$fStr = implode(', ', $favorite);

$file = $_FILES['avatar'];
$img = "uploads/anh-cuoi.jpg";

// upload file lên server
if($file['size'] > 0){
    $filename = uniqid() . "-" . $file['name'];
    move_uploaded_file($file['tmp_name'], 'uploads/' . $filename);
    $img = 'uploads/' . $filename;
}


?>
<h3><?= $student_name?></h3>
<p>Tình trạn hôn nhân: <?= $family_status?></p>
<p>Sở thích: 
        <b><?= $fStr?></b> 
</p>
<p>Quê quán: <?= $hometown?>, <?= $city?></p>
<p>Giới thiệu bản thân: <?= $detail?></p>
<img src="<?= $img?>" width="500">