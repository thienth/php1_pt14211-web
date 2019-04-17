<?php
session_start();
if(isset($_SESSION['auth']) == false || $_SESSION['auth'] == null){
    header('location: login.php');
    die;
}
require_once "./db.php";

$id = $_GET['id'];
$sql = "delete from students where id = $id";
queryExecute($sql);

header("location: index.php");

?>