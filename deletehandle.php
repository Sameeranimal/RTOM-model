<?php
$mysqli = require __DIR__ . "/database.php";
$stmt = $mysqli->stmt_init();

$sql= "DELETE FROM departments WHERE department_id=? ";


if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['department'])) {
        $departments = $_POST['department'];
      

        foreach ($departments as $department) {
          

            $stmt->bind_param("i", $department);
                   if (!$stmt->execute()){
                    if ($mysqli->errno === 1062) {
                        die("Case already exists in RTOM");
                    } else {
                        die($mysqli->error . " " . $mysqli->errno);
                    }
                }
        }
        echo "Selected items deleted successfully!";
    } 
}



$sql= "DELETE FROM scenarios WHERE scenario_id=? ";


if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['scenario'])) {
        $scenarios = $_POST['scenario'];
      

        foreach ($scenarios as $scenario) {
          

            $stmt->bind_param("i", $scenario);
                   if (!$stmt->execute()){
                    if ($mysqli->errno === 1062) {
                        die("Case already exists in RTOM");
                    } else {
                        die($mysqli->error . " " . $mysqli->errno);
                    }
                }
        }
        echo "Selected items deleted successfully!";
    } 
}


$sql= "DELETE FROM capabilities WHERE capability_id=? ";


if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['capability'])) {
        $capabilities = $_POST['capability'];
      

        foreach ($capabilities as $capability) {
          

            $stmt->bind_param("i", $capability);
                   if (!$stmt->execute()){
                    if ($mysqli->errno === 1062) {
                        die("Case already exists in RTOM");
                    } else {
                        die($mysqli->error . " " . $mysqli->errno);
                    }
                }
        }
        echo "Selected items deleted successfully!";
    } 
}




?>