<?php
session_start();
$mysqli = require __DIR__ . "/database.php";



if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST)) {
    // var_dump($_POST);
    
    $capabilityName = trim($_POST['Capability']);
    $swimlaneName = trim($_POST['Swimlane']);

    
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

        header("Location: RTOM.php?success=1");
        exit;

    } else {
        if ($mysqli->errno === 1062) {
            echo "Capability already exists in RTOM";
        } else {
            echo "Database error: " . $mysqli->error . " (Error code: " . $mysqli->errno . ")";
        }
    }

    $stmt->close();
} else {
    echo "Invalid request method.";
}
