<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");
$query = "select * from training_info WHERE id = $id";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Training Title</td>
        <td>Training Description</td>
        <td>Institute</td>
        <td>Address</td>
        <td>Training Year</td>
        <td>Duration (in days)</td>
        <td>Start Date</td>
        <td> End Date</td>
        <td> Course Title </td>
        <td> Trainer Detail</td>



        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['ttitle']?></td>
            <td><?php echo $row['tdescription']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['tyear']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['sdate']?></td>
            <td><?php echo $row['edate']?></td>
            <td><?php echo $row['ctitle']?></td>
            <td><?php echo $row['tdetail']?></td>

            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>
<a href="list.php">Go to Home</a>