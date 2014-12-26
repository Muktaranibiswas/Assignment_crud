<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");
$query = "select * from employment_info WHERE id = $id";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Company Name</td>
        <td>Company Business</td>
        <td>Address</td>
        <td>Designation</td>
        <td>Department</td>
        <td>From</td>
        <td>Employment Duration</td>
        <td>Responsibility</td>

        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['cname']?></td>
            <td><?php echo $row['cbusiness']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['designation']?></td>
            <td><?php echo $row['department']?></td>
            <td><?php echo $row['from']?></td>
            <td><?php echo $row['eduration']?></td>
            <td><?php echo $row['responsibility']?></td>


            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>
<a href="list.php">Go to Home</a>