<?php
include 'login_only.php';
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

$conn = new mysqli("localhost", "root", "", "project") or die("Connection Failed");

$sql = "INSERT INTO `student`(snane,saddress,sclass,sphone)VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql);
header("Location:index.php");
mysqli_close($conn);
die();
