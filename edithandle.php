<?php
$mysqli = include "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['department_id']) && isset($_POST['department_name'])) {
        $department_ids = $_POST;}
    }


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['department_id']) && isset($_POST['department_name'])) {
                $department_ids = $_POST['department_id'];
                $department_names = $_POST['department_name'];
        
                foreach ($department_ids as $index => $department_id) {
                    $department_name = $mysqli->real_escape_string($department_names[$index]);
                    $sql = "UPDATE departments SET department_name = '$department_name' WHERE department_id = $department_id";
                    $mysqli->query($sql);
                }
            }
        
            if (isset($_POST['capability_id']) && isset($_POST['capability_name'])) {
                $capability_ids = $_POST['capability_id'];
                $capability_names = $_POST['capability_name'];
        
                foreach ($capability_ids as $index => $capability_id) {
                    $capability_name = $mysqli->real_escape_string($capability_names[$index]);
                    $sql = "UPDATE capabilities SET capability_name = '$capability_name' WHERE capability_id = $capability_id";
                    $mysqli->query($sql);
                }
            }
        
            if (isset($_POST['scenario_id']) && isset($_POST['scenario_name'])) {
                $scenario_ids = $_POST['scenario_id'];
                $scenario_names = $_POST['scenario_name'];
        
                foreach ($scenario_ids as $index => $scenario_id) {
                    $scenario_name = $mysqli->real_escape_string($scenario_names[$index]);
                    $sql = "UPDATE scenarios SET scenario_name = '$scenario_name' WHERE scenario_id = $scenario_id";
                    $mysqli->query($sql);
                }
            }
        
            header("Location: edit.php?status=success");
            exit;
        } else {
            header("Location: edit.php");
            exit;
        }
        ?>