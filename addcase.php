<?php
$mysqli = require __DIR__ . "/database.php";


$capabilities=get_capabilities( $mysqli);
?>
<html>
<div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="addcase.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



<div class="intro">
<h1>Capabilities list </h1>
<h3><i class="fa fa-arrow-left" style="font-size:16px"></i>Please select all capabilities directly incfluenced by the case scenario on the left <br><br> 
    Please select all capabilities indirectly influenced by the case scenario on the right <i class="fa fa-arrow-right" style="font-size:16px"></i><br><br>
    Please enter a short description of the new case scenario and submit down below <i class="fa fa-arrow-down" style="font-size:16px" ></i><br>
   
    
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
