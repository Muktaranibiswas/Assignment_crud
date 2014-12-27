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
    <br>
    <label>Training Description:</label>
    <input type="text" name="tdescription" value="<?php echo $row['tdescription'];?>" />
    <br>
    <label>Institute:</label>
    <input type="text" name="institute" value="<?php echo $row['institute'];?>" />
    <br>
    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>" />
    <br>
    <label>Training Year : </label>
    <input type="text" name="tyear" value="<?php echo $row['tyear'];?>" />
    <br>
    <label>Duration (in days) : </label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" />
    <br>
    <label>Start Date:</label>
    <input type="text" name="sdate" value="<?php echo $row['sdate'];?>" />
    <br>
    <label>End Date:</label>
    <input type="text" name="edate" value="<?php echo $row['edate'];?>" />
    <br>

    <label>Course Title:</label>
    <input type="text" name="ctitle" value="<?php echo $row['ctitle'];?>" />
    <br>
    <label>Trainer Detail:</label>
    <input type="text" name="tdetail" value="<?php echo $row['tdetail'];?>" />
    <br>

    <button type="submit">Save</button>
    <button type="reset">Cancel</button>

</form>
</html>

<a href="list.php">Go to list</a>