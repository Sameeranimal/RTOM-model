<?php
$mysqli = require __DIR__ . "/database.php";


?>

<link rel="stylesheet" href="adddepartment.css">
<div class="add-department">


<h3>Add department</h3>

<form action="departmenthandle.php" method="POST"> 

<input type="text" id="Department" name="Department" Placeholder="Enter department name" ><br>
    <input type="submit" value="Submit">
</form>
</div>
<button class="btn1" onclick="history.back()">Go Back</button>
