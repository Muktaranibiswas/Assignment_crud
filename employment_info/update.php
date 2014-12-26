<?php
$id = $_POST['id'];
$cname = $_POST['cname'];
$cbusiness = $_POST['cbusiness'];
$address = $_POST['address'];
$designation= $_POST['designation'];
$department = $_POST['department'];
$from = $_POST['from'];
$eduration = $_POST['eduration'];
$responsibility = $_POST['responsibility'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");

$query = "UPDATE `crud`.`employment_info` SET `cname` = '".$cname."',
`cbusiness` = '".$cbusiness."',
`address` = '".$address."',
`designation` = '".$designation."',
`department` = '".$department."',
`from` = '".$from."',
`eduration` = '".$eduration."',
`responsibility` = '".$responsibility."'

WHERE `employment_info`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');
?>