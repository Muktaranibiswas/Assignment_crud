<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");
$query = "select * from training_info WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Training Title :</label>
    <input type="text" name="ttitle" value="<?php echo $row['ttitle'];?>" />

    <label>Training Description:</label>
    <input type="text" name="tdescription" value="<?php echo $row['tdescription'];?>" />

    <label>Institute:</label>
    <input type="text" name="institute" value="<?php echo $row['institute'];?>" />

    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>" />

    <label>Training Year : </label>
    <input type="text" name="tyear" value="<?php echo $row['tyear'];?>" />

    <label>Duration (in days) : </label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" />

    <label>Start Date:</label>
    <input type="text" name="sdate" value="<?php echo $row['sdate'];?>" />

    <label>End Date:</label>
    <input type="text" name="edate" value="<?php echo $row['edate'];?>" />


    <label>Course Title:</label>
    <input type="text" name="ctitle" value="<?php echo $row['ctitle'];?>" />

    <label>Trainer Detail:</label>
    <input type="text" name="tdetail" value="<?php echo $row['tdetail'];?>" />
    <br>

    <button type="submit">Save</button>
    <button type="reset">Cancel</button>

</form>
</html>

<a href="list.php">Go to list</a>