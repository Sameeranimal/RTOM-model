
<html>
    <link rel="stylesheet" href="RTOM.css">
    <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="addcase.php">Add case</a></li>
  <li><a href="addcapability.php">Add capability</a></li>
  <li><a href="adddepartment.php">Add department</a></li>
  <li style="float:right"><a href="edit.php">Edit</a></li>

</ul>

  
<?php

$mysqli = include "database.php";

$departments = get_departments($mysqli);
$capabilities=get_capabilities( $mysqli);
$swimlanes = get_swimlanes($mysqli);
$scenarios = get_scenarios($mysqli);


?>

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto <?php foreach ($swimlanes as $_): ?>auto <?php endforeach; ?>;
            grid-template-rows: auto <?php foreach ($departments as $_): ?>auto <?php endforeach; ?>;
            gap: 5px; 
            font-size: auto;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;

        
        }

        .grid-cell {
            display: grid;
            grid-template-columns: auto auto;
            font-size:12px;
            gap: 5px; 
            
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
            border: 1px solid rgba(169,204,238,255);

        }
    </style>

<?php




?><div class="grid-container">
    
        <div>     <a href="index.php"><img src="morphe.png" class="blockLogo"></a>   
        </div>
    <?php

foreach ($swimlanes as $swimlane){
    ?>
    <div class="blockBoven mid"><?= $swimlane['swimlane_name'] ?></div>
<?php
}

    ?>
    
    
    <?php

foreach ($departments as $department) {
    ?>
    <div class="blockRegie mid"><?= $department['department_name'] ?></div>
<?php
    foreach ($swimlanes as $swimlane) {
        ?><?php 


        $departmentId = $department['department_id'];
        $swimlaneId =$swimlane['swimlane_id'];
      $capabilities = get_capabilities_by_department_and_swimlane($mysqli, $departmentId, $swimlaneId);
     ?><div class="grid-cell"><?php

      foreach ($capabilities as $capability) {
        ?>
            <div class="blockInfo"><?= $capability['capability_name'] ?></div>
        <?php
      } 

      ?></div><?php
      
    }
}
?></div><?php



?>

<div class="Cases">
<h2> Cases</h2>

        <?php foreach ($scenarios as $scenario): ?>
            <input type="checkbox" id="scenario-<?php echo $scenario["scenario_id"]?>" name="scenario[]" value="<?php echo $scenario["scenario_id"]?>">
            <label for="scenario-<?php echo $scenario["scenario_id"]?>"><?php echo $scenario["scenario_name"]?></label><br>  
        <?php endforeach ?>


</div>




        
<!-- <button class="btn1" onclick="history.back()">Go Back</button> -->

<!-- <div class="sidenav">
  <a href="addcase.php">Add: <br>case</a>
  <a href="addcapability.php">Add: capability</a>
  <a href="adddepartment.php">Add: department</a>
</div> -->






</section>

</html>
