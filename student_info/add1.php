<?php
$code = $_POST['code'];
$track = $_POST['track'];
$fullname = $_POST['fullname'];
$fathername = $_POST['fathername'];
$mothername = $_POST['mothername'];
$religion = $_POST['religion'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$nationalid = $_POST['nationalid'];
$useremail = $_POST['useremail'];
$mobile = $_POST['mobile'];
$ = $_POST['code'];
$code = $_POST['code'];
$code = $_POST['code'];
$code = $_POST['code'];
$code = $_POST['code'];
$code = $_POST['code'];
$code = $_POST['code'];
$code = $_POST['code'];
$code = $_POST['code'];
$code = $_POST['code'];
$code = $_POST['code'];
$code = $_POST['code'];
$link = mysqli_connect("localhost", "root", "479874", "students");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = "INSERT INTO `students`.`users`(`first_name`, `last_name`, `phone`)
VALUES ('$firstName', '$lastName', '$phone')";
mysqli_query($link, $query);
header('location:list.php');