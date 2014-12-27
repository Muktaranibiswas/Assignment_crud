<?php

//print_r($_REQUEST);

$id = $_POST['id'];
$ecategory = $_POST['ecategory'];
$skills = $_POST['skills'];
$sdescription = $_POST['sdescription'];
$eactivities = $_POST['eactivities'];

$link = mysqli_connect("localhost","root","lict@2","crud");

$query = "INSERT INTO `crud`.`ict_skills` (`ecategory`, `skills`, `sdescription`, `eactivities`)
VALUES ('$ecategory', '$skills', '$sdescription', '$eactivities')";
//echo $query;

mysqli_query($link, $query);
?>

<a href="create.html">Go Back</a>



