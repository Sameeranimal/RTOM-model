

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

<div class="deleteform">

<form action="deletehandle.php" method="post">
<div class="Departments"><h2>Departments</h2>

<?php foreach ($departments as $department): ?>
    <div class="department"><input type="checkbox" id="department-<?php echo $department["department_id"]?>" name="department[]" value="<?php echo $department["department_id"]?>">
    <label for="department-<?php echo $department["department_id"]?>"><?php echo $department["department_name"]?></label></div> 
<?php endforeach ?>


</div>


<div class="Capabilities"><h2>Capabilities</h2>

<?php foreach ($capabilities as $capability): ?>
    <div class="capability"><input type="checkbox" id="capability-<?php echo $capability["capability_id"]?>" name="capability[]" value="<?php echo $capability["capability_id"]?>">
    <label for="capability-<?php echo $capability["capability_id"]?>"><?php echo $capability["capability_name"]?></label>  </div>
<?php endforeach ?>

</div>

<div class="Cases"><h2>Cases</h2>

<?php foreach ($scenarios as $scenario): ?>
    <div class="case"><input type="checkbox" id="scenario-<?php echo $scenario["scenario_id"]?>" name="scenario[]" value="<?php echo $scenario["scenario_id"]?>">
    <label for="scenario-<?php echo $scenario["scenario_id"]?>"><?php echo $scenario["scenario_name"]?></label></div>
<?php endforeach ?>
</div>


<button  type="submit" class="delete" >Delete</button>



</form>

</div>

<div class="editform">

<form action="edithandle.php" method="post">
    <div class="Departments2"><h2>Edit Departments</h2>
        <?php foreach ($departments as $department): ?>
            <input type="hidden" name="department_id[]" value="<?php echo $department["department_id"]?>">
            <input type="text" name="department_name[]" value="<?php echo $department["department_name"]?>" required>
            <br>  
        <?php endforeach ?>
    </div>

    <div class="Capabilities2"><h2>Edit Capabilities</h2>
        <?php foreach ($capabilities as $capability): ?>
            <input type="hidden" name="capability_id[]" value="<?php echo $capability["capability_id"]?>">
            <input type="text" name="capability_name[]" value="<?php echo $capability["capability_name"]?>" required>
            <br>  
        <?php endforeach ?>
    </div>

    <div class="Cases2"><h2>Edit Cases</h2>
        <?php foreach ($scenarios as $scenario): ?>
            <input type="hidden" name="scenario_id[]" value="<?php echo $scenario["scenario_id"]?>">
            <input type="text" name="scenario_name[]" value="<?php echo $scenario["scenario_name"]?>" required>
            <br>  
        <?php endforeach ?>
    </div>

    <button type="submit" class="edit">Save Changes</button>
</form>

</div>




</body>
</html>
  
  