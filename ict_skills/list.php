<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");
$query = "select * from ict_skills;";
$result = mysqli_query($link, $query);
?>
<ul>
    <li><a href="create.html">Create New</a> </li>
</ul>
<table border="1" width="90%">
    <tr>
        <td>ID</td>
        <td>Experience Category</td>
        <td>Skills</td>
        <td>Skill Description</td>
        <td>Extracurricular Activities</td>



        <td>Action</td>
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
<a href="create.html">Go to Home</a>