<?php
function displayData($search = "") {
    include("DbControllers/DbConnect.php");

    $conn = Database::getInstance()->getConnection();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($search != "") {
        $search = mysqli_real_escape_string($conn, $search);
        $sql = "SELECT * FROM users WHERE username LIKE '%{$search}%' or role LIKE '%{$search}%' or personalnr LIKE '%{$search}%'";
    } else {
        $sql = "SELECT * FROM users limit 5";
    }

    $result = $conn->query($sql);

    $rows = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }

    $conn->close();

    return $rows;
}
