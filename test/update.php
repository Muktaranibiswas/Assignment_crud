<?php
$id = $_POST['id'];
$name = $_POST['name'];
$track = $_POST['track'];
$gender = $_POST['gender'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");
$query = "UPDATE `crud`.`test` SET `name` = '".$name."',
`track` = '".$track."',
`gender` = '".$gender."'
 WHERE `test`.`id` =$id;";

mysqli_query($link, $query);

header('location:list.php');
?>
