<?php

$id = $_POST['id'];
$cname = $_POST['cname'];
$cbusiness = $_POST['cbusiness'];
$address = $_POST['address'];
$designation= $_POST['designation'];
$department = $_POST['department'];
$from = $_POST['from'];
$eduration = $_POST['eduration'];
$responsibility = $_POST['responsibility'];



$link = mysqli_connect("localhost","root","lict@2","crud");

$query = "INSERT INTO `crud`.`employment_info` (`cname`, `cbusiness`, `address`, `designation`, `department`, `from`, `eduration`, `responsibility`)
VALUES ('$cname', '$cbusiness', '$address', '$designation', '$department', '$from', '$eduration', '$responsibility')";
//echo $query;

mysqli_query($link, $query);
?>

<a href="create.html">Go Back</a>



