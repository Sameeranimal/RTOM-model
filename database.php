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
    $sql ="SELECT * FROM capabilities";
    
    $result = $mysqli->query($sql);
    $rows = array();
    while($row = $result->fetch_assoc()) {
    $rows[] = $row;
    }
return $rows;

    
}
return $mysqli;




function get_scenarios($mysqli) {

    $sql ="SELECT * FROM scenarios";
    
    $result = $mysqli->query($sql);
    $rows = array();
    while($row = $result->fetch_assoc()) {
    $rows[] = $row;
    }
return $rows;

    
}

function get_departments($mysqli) {

    $sql ="SELECT * FROM departments";
    
    $result = $mysqli->query($sql);
    $rows = array();
    while($row = $result->fetch_assoc()) {
    $rows[] = $row;
    }
return $rows;

    
}


function get_swimlanes($mysqli) {

    $sql ="SELECT * FROM departments";
    
    $result = $mysqli->query($sql);
    $rows = array();
    while($row = $result->fetch_assoc()) {
    $rows[] = $row;
    }
return $rows;

    
}



    


