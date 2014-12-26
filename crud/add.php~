<?php


//print_r($_REQUEST);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contactnumber = $_POST['contactnumber'];


$link = mysqli_connect("localhost","root","lict@2","students");

$query = "INSERT INTO `students`.`users` (`firstname`, `lastname`, `contactnumber`)
          VALUES ('$firstname', '$lastname', '$contactnumber')";
//echo $query;

mysqli_query($link, $query);
?>

<a href="create.html">Go Back</a>