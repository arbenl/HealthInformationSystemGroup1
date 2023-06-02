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
        $sql = "SELECT * FROM patients WHERE first_name LIKE '%{$search}%' or last_name LIKE '%{$search}%' or gender LIKE '%{$search}%' or phone_number LIKE '%{$search}%' or email LIKE '%{$search}%'" ;
    } else {
        $sql = "SELECT * FROM patients limit 10";
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


function displayAppointmentData($search = "")
{
    include_once("DbControllers/DbConnect.php");
    $conn = Database::getInstance()->getConnection();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


        $sql = "SELECT * FROM appointments limit 10";

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
function selectData($tablename)
{
    include_once("DbControllers/DbConnect.php");
    $conn = Database::getInstance()->getConnection();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


        $sql = "SELECT * FROM $tablename limit 10";

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