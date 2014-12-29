<?php
$id = $_GET['id'];

$link = mysqli_connect("localhost","root","lict@2","crud");
$query = "select * from test WHERE id = $id";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<ul>
    <li><a href="create.html">create new</a></li>
</ul>
<table border ="1" width="90%">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Track</td>
        <td>Gender</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['track']?></td>
            <td><?php echo $row['gender']?></td>
            <td>

                <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>|
                <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>

            </td>
        </tr>

    <?php
    }
    ?>

</table>

<a href="list.php">Go to Home</a>