<?php
include 'login_only.php';

$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

$conn = new mysqli("localhost", "root", "", "project") or die("Connection Failed");

$sql = "UPDATE `student` set `sid` = $stu_id,`snane` = '{$stu_name}',`saddress` = '{$stu_address}',`sclass` = $stu_class,`sphone` = $stu_phone WHERE `sid` = $stu_id";
$result = mysqli_query($conn, $sql);
header("Location:index.php");
mysqli_close($conn);
die();
