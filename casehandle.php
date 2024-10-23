<?php
$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO scenarios (scenario_name)
        VALUES (?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
var_dump($_POST);
$stmt->bind_param("s",
                  
                  $_POST["Case"]);

if (!empty($_POST)){               
if ($stmt->execute()) {

    header("Location: RTOM.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("Case already exists in RTOM");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
}
