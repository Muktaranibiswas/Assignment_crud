<?php
$id = $_POST['id'];
$ecategory = $_POST['ecategory'];
$skills = $_POST['skills'];
$sdescription = $_POST['sdescription'];
$eactivities = $_POST['eactivities'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");

$query = "UPDATE `crud`.`ict_skills` SET `ecategory` = '".$ecategory."',
`skills` = '".$skills."',
`sdescription` = '".$sdescription."',
`eactivities` = '".$eactivities."'



WHERE `ict_skills`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');
?>