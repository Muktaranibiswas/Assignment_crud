<?php
$id = $_POST['id'];

$ttitle = $_POST['ttitle'];
$tdescription = $_POST['tdescription'];
$institute = $_POST['institute'];
$address= $_POST['address'];
$tyear = $_POST['tyear'];
$duration = $_POST['duration'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];
$ctitle= $_POST['ctitle'];
$tdetail= $_POST['tdetail'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");

$query = "UPDATE `crud`.`training_info` SET `ttitle` = '".$ttitle."',
`tdescription` = '".$tdescription."',
`institute` = '".$institute."',
`address` = '".$address."',
`tyear` = '".$tyear."',
`duration` = '".$duration."',
`sdate` = '".$sdate."',
`edate` = '".$edate."',
`ctitle` = '".$ctitle."',
`tdetail` = '".$tdetail."'

WHERE `training_info`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');
?>