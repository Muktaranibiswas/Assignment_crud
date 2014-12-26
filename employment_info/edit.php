<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");
$query = "select * from employment_info WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Company Name:</label>
    <input type="text" name="cname" value="<?php echo $row['cname'];?>" />

    <label>Company Business:</label>
    <input type="text" name="cbusiness" value="<?php echo $row['cbusiness'];?>" />

    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>" />

    <label>Designation:</label>
    <input type="text" name="designation" value="<?php echo $row['designation'];?>" />

    <label>Department :</label>
    <input type="text" name="department" value="<?php echo $row['department'];?>" />

    <label>From :</label>
    <input type="text" name="from" value="<?php echo $row['from'];?>" />


    <label>Employment Duration:</label>
    <input type="text" name="eduration" value="<?php echo $row['eduration'];?>" />

    <label>Responsibility:</label>
    <input type="text" name="responsibility" value="<?php echo $row['responsibility'];?>" />

    <br>

    <button type="submit">Save</button>
    <button type="reset">Cancel</button>

</form>
</html>

<a href="list.php">Go to list</a>