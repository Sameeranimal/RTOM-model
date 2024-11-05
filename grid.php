
<html>
    <link rel="stylesheet" href="grid.css">
  
<?php

$mysqli = include "database.php";

$departments = get_departments($mysqli);
$swimlanes = get_swimlanes($mysqli);

?>

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: <?php foreach ($swimlanes as $_): ?>auto <?php endforeach; ?>;
            grid-template-rows: <?php foreach ($departments as $_): ?>auto <?php endforeach; ?>;
            gap: 10px; 
            font-size: auto;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
            padding: 10px;

        }
    </style>

<?php




?><div class="grid-container"><?php

foreach ($departments as $department) {
    foreach ($swimlanes as $swimlane) {
        ?><div class="grid-container"><?php


        $departmentId = $department['department_id'];
        $swimlaneId =$swimlane['swimlane_id'];
      $capabilities = get_capabilities_by_department_and_swimlane($mysqli, $departmentId, $swimlaneId);
      

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



</html>