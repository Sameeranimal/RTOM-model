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

<h3>2.Assign fase</h3>

<?php foreach ($swimlanes as $swimlane): ?>
    <input type="checkbox" id="swimlane-<?php echo $swimlane["swimlane_id"]?>" name="swimlane[]" value="<?php echo $swimlane["swimlane_id"]?>">
    <label for="swimlane-<?php echo $swimlane["swimlane_id"]?>"><?php echo $swimlane["swimlane_name"]?></label><br>
<?php endforeach ?>

<h3>3.Name capability</h3>
<input type="text" id="Capability" name="Capability" Placeholder="Enter Capability name" ><br>

<h3>4.Description</h3>
<input type="text" id="Description" name="Description" Placeholder="Add short description" ><br>

   
<input type="Submit" value="Submit">
</div>
    

</form>
</div>

<button class="btn1" onclick="history.back()">Go Back</button> 

</body>
</html>
