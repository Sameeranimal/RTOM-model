<?php
$mysqli = require __DIR__ . "/database.php";

if (!empty($_POST)){               
    $directIndirectRelation = [];

if (isset($_POST ['capability_direct'])){

    foreach ($_POST['capability_direct'] as $value) {

        $directIndirectRelation[$value]=true;
    }
        
  

    }

if (isset($_POST ['capability_indirect'])){

    foreach ($_POST['capability_indirect'] as $value) {

        $directIndirectRelation[$value]=false;
    }


    }
    
}



$sql = "INSERT INTO scenarios (scenario_name)
        VALUES (?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}


$stmt->bind_param("s",
                  
                  $_POST["Case"]);

if ($stmt->execute()) {
    $scenario_id = $stmt->insert_id; 

$sql = "INSERT INTO scenario_capabilities(scenario_id, capability_id, direct) VALUES (?,?,?);"; 

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

// var_dump($directIndirectRelation);
// die;



                  foreach ($directIndirectRelation as $key => $value) {
                    $stmt->bind_param("iii", $scenario_id, $key, $value);
                   if (!$stmt->execute()){
                    if ($mysqli->errno === 1062) {
                        die("Case already exists in RTOM");
                    } else {
                        die($mysqli->error . " " . $mysqli->errno);
                    }
                   }
                }

    header("Location: RTOM.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("Case already exists in RTOM");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}





 