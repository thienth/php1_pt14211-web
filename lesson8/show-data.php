<?php
$student_name = $_GET['student_name'];
$city = $_GET['city'];
$hometown = $_GET['hometown'];
$detail = $_GET['detail'];
?>
<h3><?= $student_name?></h3>
<p>Quê quán: <?= $hometown?>, <?= $city?></p>
<p>Giới thiệu bản thân: <?= $detail?></p>