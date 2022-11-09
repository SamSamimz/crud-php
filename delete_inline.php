<?php
include 'login_only.php';
$id = $_GET['id'];

$conn = new mysqli("localhost", "root", "", "project") or die("Connection Failed");

$sql = "DELETE FROM `student` WHERE `sid` = $id";
$result = mysqli_query($conn, $sql);
header("Location:index.php");
mysqli_close($conn);
die();
