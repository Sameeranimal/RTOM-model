<?php
session_start();
$mysqli = require __DIR__ . "/database.php";



if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST)) {
    // var_dump($_POST);
    
    $capabilityName = trim($_POST['Capability']);
    
    if (empty($capabilityName)) {
        die("Capability name cannot be empty.");
    }

    $sql = "INSERT INTO capabilities (capability_name) VALUES (?)";
    $stmt = $mysqli->stmt_init();

    if (!$stmt->prepare($sql)) { 
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("s", $capabilityName);

    if ($stmt->execute()) {
        $capabilityId = $stmt->insert_id; 

        if (isset($_POST['Department']) && is_array($_POST['Department'])) {
            foreach ($_POST['Department'] as $departmentId) {
                if (is_numeric($departmentId)) {
                    
                    $stmtDept = $mysqli->prepare("INSERT INTO department_capabilities (capability_id, department_id) VALUES (?, ?)");
                    if ($stmtDept) {
                        $stmtDept->bind_param("ii", $capabilityId, $departmentId);
                        if (!$stmtDept->execute()) {
                            echo "Error inserting department capability: " . $stmtDept->error; 
                        }
                        $stmtDept->close();
                    } else {
                        echo "Failed to prepare department capability statement: " . $mysqli->error;
                    }
                } else {
                    echo "Invalid department ID.";
                }
            }
            
        } else {
            echo "No departments selected.";
        }
        if (isset($_POST['swimlane']) && is_array($_POST['swimlane'])) {
            foreach ($_POST['swimlane'] as $swimlaneId) {
                if (is_numeric($swimlaneId)) {
                    $stmtSwimlane = $mysqli->prepare("INSERT INTO swimlane_capability (capability_id, swimlane_id) VALUES (?, ?)");
                    if ($stmtSwimlane) {
                        $stmtSwimlane->bind_param("ii", $capabilityId, $swimlaneId);
                        
                        if (!$stmtSwimlane->execute()) {
                            echo "Error inserting swimlane capability: " . $stmtSwimlane->error; 
                            die;
                        }
                        $stmtSwimlane->close();
                    } else {
                        echo "Failed to prepare swimlane capability statement: " . $mysqli->error;
                    }
                } else {
                    echo "Invalid swimlane ID.";
                }
            }
        } else {
            echo "No swimlanes selected.";
        }


    } else {
        if ($mysqli->errno === 1062) {
            echo "Capability already exists in RTOM";
        } else {
            echo "Database error: " . $mysqli->error . " (Error code: " . $mysqli->errno . ")";
        }
    }

   
    
    header("Location: RTOM.php?success=1");

    
    




    $stmt->close();
} else {
    echo "Invalid request method.";
}





