<?php


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



$link = mysqli_connect("localhost","root","lict@2","crud");

$query = "INSERT INTO `crud`.`training_info` (`ttitle`, `tdescription`, `institute`, `address`, `tyear`, `duration`, `sdate`, `edate`, `ctitle`, `tdetail`)
VALUES ('$ttitle', '$tdescription', '$institute', '$address', '$tyear', '$duration', '$sdate', '$edate', '$ctitle', '$tdetail')";
//echo $query;

mysqli_query($link, $query);
?>

<a href="create.html">Go Back</a>

