<?php
require_once "./db.php";

$id = $_GET['id'];
$sql = "delete from students where id = $id";
queryExecute($sql);

header("location: index.php");

?>