<?php

$host = "localhost";
$dbname = "rtom";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}




function get_capabilities($mysqli)  {
//     $sql ="SELECT * FROM capabilities";
    
//     $result = $mysqli->query($sql);
//     $rows = array();
//     while($row = $result->fetch_assoc()) {
//     $rows[] = $row;
//     }
// return $rows;
return get_all_from_table($mysqli, "capabilities");

    
}
return $mysqli;




function get_scenarios($mysqli) {

//     $sql ="SELECT * FROM scenarios";
    
//     $result = $mysqli->query($sql);
//     $rows = array();
//     while($row = $result->fetch_assoc()) {
//     $rows[] = $row;
//     }
// return $rows;

return get_all_from_table($mysqli, "scenarios");

    
}

function get_departments($mysqli) {

//     $sql ="SELECT * FROM departments";
    
//     $result = $mysqli->query($sql);
//     $rows = array();
//     while($row = $result->fetch_assoc()) {
//     $rows[] = $row;
//     }
// return $rows;

return get_all_from_table($mysqli, "departments");

    
}


function get_swimlanes($mysqli) {

//     $sql ="SELECT * FROM swimlanes";
    
//     $result = $mysqli->query($sql);
//     $rows = array();
//     while($row = $result->fetch_assoc()) {
//     $rows[] = $row;
//     }
// return $rows;
return get_all_from_table($mysqli, "swimlanes");

    
}

function get_capabilities_by_department_and_swimlane($mysqli, $departmentId, $swimlaneId) {
    $sql = "SELECT c.* from capabilities AS c JOIN department_capabilities AS dc ON dc.capability_id = c.capability_id JOIN swimlane_capability AS sc ON sc.capability_id = c.capability_id WHERE dc.department_id = ? AND sc.swimlane_id = ?";



    $statement = $mysqli->prepare($sql);
    $statement->bind_param("ii", $departmentId, $swimlaneId);
    $rows = array();
    if ($statement->execute()) {
        $result = $statement->get_result();
    
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    return $rows;
}


function get_all_from_table($mysqli, $table_name){


    $sql ="SELECT * FROM $table_name";
    
    $result = $mysqli->query($sql);
    $rows = array();
    while($row = $result->fetch_assoc()) {
    $rows[] = $row;
    }
return $rows;

}


function get_capabilities_by_scenario($mysqli, $scenarioId) {
    $sql = "SELECT c.*, sc.direct from capabilities AS c JOIN scenario_capabilities AS sc ON sc.capability_id = c.capability_id WHERE sc.scenario_id = ?";


}

    


