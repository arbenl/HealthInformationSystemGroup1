<?php

include('Views/admin/_adminHeader.php');
include("Functions/data.php");
?>
<?php
include('Views/admin/_doctorManagement.php');

?>
<?php
$dbname = "healthinformationsystem.sql";

// Change these to your own database credentials
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "13243546578";

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to retrieve doctors' information
    $query = "SELECT * FROM doctor";

    // Prepare the query statement
    $stmt = $conn->prepare($query);

    // Execute the query
    $stmt->execute();

    // Fetch all rows as an associative array
    $doctors = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

