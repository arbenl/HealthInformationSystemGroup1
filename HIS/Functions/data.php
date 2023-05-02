<?php
function getAllTableData($tableName) {
    // Establish database connection
    include_once("DbControllers/DbConnect.php");

    $conn = Database::getInstance()->getConnection();

    // Check for errors in the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Select data from the specified table
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);

    // Check for errors in the query
    if (!$result) {
        die("Error in query: " . $conn->error);
    }

    // Convert result set into array
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Close database connection
    $conn->close();

    // Return array of data
    return $data;
}
function insertDataIntoTable($tableName, $columnNames, $data) {
    // Establish database connection
    include_once("DbControllers/DbConnect.php");

    $conn = Database::getInstance()->getConnection();

    // Check for errors in the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Build SQL query
    $columns = implode(", ", $columnNames);
    $values = "'" . implode("', '", $data) . "'";
    $sql = "INSERT INTO $tableName ($columns) VALUES ($values)";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        $insertMessage = "Data inserted successfully!";
    } else {
        $insertMessage= "Error inserting data: " . $conn->error;
    }

    // Close database connection
    $conn->close();
}

?>


