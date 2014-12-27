<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");
$query = "select * from reference_info WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $row['name'];?>" />
    <br>
    <label>Organization:</label>
    <input type="text" name="organization" value="<?php echo $row['organization'];?>" />

    <br>
    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>" />

    <br>
    <label>Relation:</label>
    <input type="text" name="relation" value="<?php echo $row['relation'];?>" />

    <br>
    <label>Phone (Office)</label>
    <input type="text" name="poffice" value="<?php echo $row['poffice'];?>" />

    <br>
    <label>Phone (Home)</label>
    <input type="text" name="phome" value="<?php echo $row['phome'];?>" />

    <br>
    <label>Mobile:</label>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" />

    <br>
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" />

    <br>

    <button type="submit">Save</button>
    <button type="reset">Cancel</button>

</form>
</html>

<a href="list.php">Go to list</a>