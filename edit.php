

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
</head>
<body>

<ul><li style="float:right"><a href="RTOM.php">RTOM</a></li></ul>

<?php

$mysqli = include "database.php";


$departments = get_departments($mysqli);
$capabilities=get_capabilities( $mysqli);
$swimlanes = get_swimlanes($mysqli);
$scenarios = get_scenarios($mysqli);


?>


<form action="deletehandle.php" method="post">
<div class="Departments"><h2>Departments</h2>

<?php foreach ($departments as $department): ?>
    <input type="checkbox" id="department-<?php echo $department["department_id"]?>" name="department[]" value="<?php echo $department["department_id"]?>">
    <label for="department-<?php echo $department["department_id"]?>"><?php echo $department["department_name"]?></label><br>  
<?php endforeach ?>


</div>


<div class="Capabilities"><h2>Capabilities</h2>

<?php foreach ($capabilities as $capability): ?>
    <input type="checkbox" id="capability-<?php echo $capability["capability_id"]?>" name="capability[]" value="<?php echo $capability["capability_id"]?>">
    <label for="capability-<?php echo $capability["capability_id"]?>"><?php echo $capability["capability_name"]?></label><br>  
<?php endforeach ?>

</div>

<div class="Cases"><h2>Cases</h2>

<?php foreach ($scenarios as $scenario): ?>
    <input type="checkbox" id="scenario-<?php echo $scenario["scenario_id"]?>" name="scenario[]" value="<?php echo $scenario["scenario_id"]?>">
    <label for="scenario-<?php echo $scenario["scenario_id"]?>"><?php echo $scenario["scenario_name"]?></label><br>  
<?php endforeach ?>
</div>


<button onclick="myFunction()" type="submit" class="delete" >Delete</button>

<script>
function myFunction() {
  confirm("Are you sure you want to delete?");
}
</script>

</form>



</body>
</html>
  
  