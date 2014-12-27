<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");
$query = "select * from ict_skills WHERE id = $id";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Experience Category</td>
        <td>Skills</td>
        <td>Skill Description</td>
        <td>Extracurricular Activities</td>
        <td>Extracurricular Activities</td>


    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['ecategory']?></td>
            <td><?php echo $row['skills']?></td>
            <td><?php echo $row['sdescription']?></td>
            <td><?php echo $row['eactivities']?></td>

            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>
<a href="list.php">Go to Home</a>