<?php


$name = $_POST['name'];
$organization = $_POST['organization'];
$address = $_POST['address'];
$relation= $_POST['relation'];
$poffice = $_POST['poffice'];
$phome = $_POST['phome'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];



$link = mysqli_connect("localhost","root","lict@2","crud");

$query = "INSERT INTO `crud`.`reference_info` (`name`, `organization`, `address`, `relation`, `poffice`, `phome`, `mobile`, `email`)
VALUES ('$name', '$organization', '$address', '$relation', '$poffice', '$phome', '$mobile', '$email')";
//echo $query;

mysqli_query($link, $query);
?>

<a href="create.html">Go Back</a>



