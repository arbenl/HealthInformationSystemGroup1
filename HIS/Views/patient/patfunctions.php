<?php

function displayData($search = "")
{
    include_once("DbControllers/DbConnect.php");
    $conn = Database::getInstance()->getConnection();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($search != "") {
        $search = mysqli_real_escape_string($conn, $search);
        $sql = "SELECT * FROM user WHERE user_name LIKE '%{$search}%' or user_role LIKE '%{$search}%'";
    } else {
        $sql = "SELECT * FROM user limit 5";
    }

    $result = $conn->query($sql);

    $rows = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }


    $conn->close();

    return $rows;
}


function selectPrescriptionData($patientId)
{
    include_once("DbControllers/DbConnect.php");
    $conn = Database::getInstance()->getConnection();
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM prescriptions WHERE patient_id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $patientId);
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    $rows = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    
    $stmt->close();
    $conn->close();
    
    return $rows;
}

