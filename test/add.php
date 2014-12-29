<?php

$name =$_POST['name'];
$track = $_POST['track'];
$gender = $_POST['gender'];

$link = mysqli_connect("localhost", "root","lict@2", "crud");

$query ="INSERT INTO `crud`.`test` (`name` ,
`track` ,
`gender`
)
VALUES ('$name', '$track', '$gender')";

mysqli_query($link, $query);
?>
<a href "create.html">Go back</a>
