<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");


$query = "DELETE FROM `crud`.`reference_info` WHERE `reference_info`.`id` = $id";



mysqli_query($link, $query);

header('location:list.php');

?>

