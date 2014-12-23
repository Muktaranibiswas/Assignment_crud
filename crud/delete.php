<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");


$id = $_GET['id'];

$query = "DELETE FROM `students`.`users` WHERE `users`.`id` = $id";



mysqli_query($link, $query);


header('location:list.php');