<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud");
$query = "select * from test WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method = "POST">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Name :</label>
    <input type="text" name="name" value="<?php echo $row['name'];?>" />
    <br>
    <label>Track:</label>

    <select name = "track">
        <option <?php if ($row ['track']=="its") echo 'selected';?> value = "its">its</option>
        <option <?php if ($row ['track']=="ites") echo 'selected';?> value = "ites">ites</option>
        <option <?php if ($row ['track']=="itss") echo 'selected';?> value = "itss">itss</option>
       </select>

    <br>

    <label>Gender:</label>

    <input type="radio" name="gender"<?php if ($row['gender']== "Male") echo 'checked';?> value= "Male" />Male
    <input type="radio" name="gender"<?php if ($row['gender']== "Female") echo 'checked';?> value= "Female" />Female
    <br>

    <button type="submit">Save</button>
    <button type="reset">Cancel</button>

</form>

<a href = "update.php">go to list</a>
