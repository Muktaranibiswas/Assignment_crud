<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");
$query = "select * from training_info;";
$result = mysqli_query($link, $query);
?>
<ul>
    <li><a href="create.html">Create New</a> </li>
</ul>
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

            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View</a> |
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
