<?php
$mysqli = require __DIR__ . "/database.php";


$capabilities=get_capabilities( $mysqli);
?>
<html>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="addcase.css">

<div class="intro">
<h1>Capabilities list </h1>
<h3>1.Please select all capabilities directly incfluenced by the case scenario on the left <br>
    2.Please select all capabilities indirectly influenced by the case scenario on the right <br>
    3.Please enter a short description of the new case scenario<br>
    4.Submit data
</h3>
</div>

  
</div>

<form action="casehandle.php" method="post">
<div class="form1">


<form action="">


    <h2>Directly influenced</h2> 
    <?php foreach ($capabilities as $capability): ?>
            <input type="checkbox" id="capability-<?php echo $capability["capability_id"]?>" name="capability_direct[]"  value="<?php echo $capability["capability_id"]?>">
            <label for="capability-<?php echo $capability["capability_id"]?>"><?php echo $capability["capability_name"]?></label><br>  
    <?php endforeach ?>

 

</div>

    
 
<div class="form2">


    <h2>Indirectly influenced</h2>

    <?php foreach ($capabilities as $capability): ?>
            <input type="checkbox" id="capability-<?php echo $capability["capability_id"]?>" name="capability_indirect[]" value="<?php echo $capability["capability_id"]?>">
            <label for="capability-<?php echo $capability["capability_id"]?>"><?php echo $capability["capability_name"]?></label><br>  
    <?php endforeach ?>
  
  

  </div>

  <div class="case">
  
    <h2>Add case</h2>
    
  
  <input type="text" id="Case" name="Case" Placeholder="Enter case scenario " ><br>
    <input type="submit" value="Submit">


</div>
</form>


<button class="btn1" onclick="history.back()">Go Back</button>





<button class="btn1" onclick="history.back()">Go Back</button>

</body>
</html>
