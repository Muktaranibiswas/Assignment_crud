<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");
$query = "select * from reference_info WHERE id = $id";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Organization</td>
        <td>Address</td>
        <td>Relation</td>
        <td>Phone (Office)</td>
        <td>Phone (Home)</td>
        <td>Mobile</td>
        <td>Email</td>


        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['organization']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['relation']?></td>
            <td><?php echo $row['poffice']?></td>
            <td><?php echo $row['phome']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>

            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>
<a href="list.php">Go to Home</a>