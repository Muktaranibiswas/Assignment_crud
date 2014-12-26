<?php

//print_r($_REQUEST);

$code = $_POST['code'];
$track = $_POST['track'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$fathersname = $_POST['fathersname'];
$mothersname = $_POST['mothersname'];
$religion = $_POST['religion'];
$dateofbirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$nationaliD = $_POST['nationalid'];
$passport = $_POST['passport'];
$presentaddress = $_POST['presentaddress'];
$permanentaddress = $_POST['permanentaddress'];
$email = $_POST['email'];
$alternateemail = $_POST['alternateemail'];
$contactnumber = $_POST['contactnumber'];
$sscinstitute = $_POST['sscinstitute'];
$sscroll = $_POST['sscroll'];
$sscresult = $_POST['sscresult'];
$sscyear = $_POST['sscyear'];
$sscboard = $_POST['sscboard'];
$hscinstitute = $_POST['hscinstitute'];
$hscroll = $_POST['hscroll'];
$hscresult = $_POST['hscresult'];
$hscyear = $_POST['hscyear'];
$hscboard = $_POST['hscboard'];
$bachelordegree = $_POST['bachelordegree'];
$Institute = $_POST['bscnstitute'];
$sscresult = $_POST['bscresult'];
$hscyear = $_POST['bscyear'];

$link = mysqli_connect("localhost","root","lict@2","students_info_form");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "INSERT INTO `students_info_form`.`users` (`code`, `track`, `firstname`, `lastname`, `fathersname`, `mothersname`, `religion`, `dateofbirth`, `gender`, `nationality`, `nationalid`, `passport`, `presentaddress`, `permanentaddress`, `email`, `alternateemail`, `contactnumber`, `sscinstitute`, `sscroll`, `sscresult`, `sscyear`, `sscboard`, `hscinstitute`, `hscroll`, `hscresult`, `hscyear`, `hscboard`, `bachelordegree`, `bscnstitute`, `bscresult`, `bscyear`)
VALUES ('$code', '$track' '$firstname', '$lastname', '$fathersname', '$mothersname', '$religion', '$dateofbirth ', '$gender ', '$nationality', '$nationaliD', '$passport', '$presentaddress', '$permanentaddress', '$email', '$alternateemail, '$contactnumber', '$sscinstitute', '$sscroll', '$sscresult', '$sscyear', '$sscboard', '$hscinstitute', '$hscroll', '$hscresult', '$hscyear', '$hscboard', '$bachelordegree', '$bscnstitute', '$bscresult', '$bscyear')";

//echo $query;


//mysqli_query($link, $query);

//<a href="123.html">Go Back</a>
mysqli_query($link, $query);
header('location:all.php');
?>