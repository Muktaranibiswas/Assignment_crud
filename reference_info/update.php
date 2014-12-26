<?php
$id = $_POST['id'];
$name = $_POST['name'];
$organization = $_POST['organization'];
$address = $_POST['address'];
$relation= $_POST['relation'];
$poffice = $_POST['poffice'];
$phome = $_POST['phome'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");

$query = "UPDATE `crud`.`reference_info` SET `name` = '".$name."',
`organization` = '".$organization."',
`address` = '".$address."',
`relation` = '".$relation."',
`poffice` = '".$poffice."',
`phome` = '".$phome."',
`mobile` = '".$mobile."',
`email` = '".$email."'

WHERE `reference_info`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');
?>