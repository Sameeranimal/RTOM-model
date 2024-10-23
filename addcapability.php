<?php
$mysqli = require __DIR__ . "/database.php";



$departments=get_departments( $mysqli);
$swimlanes=get_swimlanes($mysqli);


?>

<html>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="addcapability.css">



<div class="add-capability">



<form action="capabilityhandle.php" method="POST"> 

<h3>1.Choose  department </h3>

<?php foreach ($departments as $department): ?>
    <input type="checkbox" id="Department-<?php echo $department["department_id"]?>" name="Department[]" value="<?php echo $department["department_id"]?>">
    <label for="Department-<?php echo $department["department_id"]?>"><?php echo $department["department_name"]?></label><br>
<?php endforeach ?>

<h3>Choose fase</h3>

<?php foreach ($departments as $department): ?>
    <input type="checkbox" id="swimlane-<?php echo $swimlanes["swimlane_id"]?>" name="swimlane[]" value="<?php echo $swimlanes["swimlane_id"]?>">
    <label for="swimlane-<?php echo $swimlanes["swimlane_id"]?>"><?php echo $swimlanes["swimlane_name"]?></label><br>
<?php endforeach ?>
<h3>2.Name capability</h3>
<input type="text" id="Capability" name="Capability" Placeholder="Enter Capability name" ><br>
   <!-- <h3>3.Description</h3>
<div class="description">
    <input type="text" id="description" name="description" Placeholder="Write short description on capability" ><br> -->
<input type="Submit" value="Submit">
</div>
    

</form>
</div>

<button class="btn1" onclick="history.back()">Go Back</button> 















</body>
</html>
