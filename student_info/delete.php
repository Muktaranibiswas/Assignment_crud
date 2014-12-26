<?php
$code = $_GET['code'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students_info_form");



$query = "DELETE FROM `students_info_form`.`users` WHERE `users`.`code` = $code";



mysqli_query($link, $query);


header('location:list.php');
?>



