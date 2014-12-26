<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");


$query = "DELETE FROM `crud`.`employment_info` WHERE `employment_info`.`id` = $id";



mysqli_query($link, $query);

header('location:list.php');

?>

