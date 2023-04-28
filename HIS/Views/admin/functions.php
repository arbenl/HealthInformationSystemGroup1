<?php
function displayData($search = "") {
    // MySQL database credentials
    $servername = "localhost";
    $username = "root";
    $password = "RootAdmin.12@";
    $dbname = "his";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Construct the SQL query
    if ($search != "") {
        // Sanitize user input to prevent SQL injection
        $search = mysqli_real_escape_string($conn, $search);
        // SQL query to select data from the table matching the user input
        $sql = "SELECT * FROM users WHERE username LIKE '%{$search}%' or role LIKE '%{$search}%' or personalnr LIKE '%{$search}%'";
    } else {
        // SQL query to select all data from the table
        $sql = "SELECT * FROM users limit 5";
    }

    // Execute the query
    $result = $conn->query($sql);

    // If there are rows returned from the query, construct the array of rows
    $rows = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }

    // Close the database connection
    $conn->close();

    // Return the array of rows
    return $rows;
}

?>