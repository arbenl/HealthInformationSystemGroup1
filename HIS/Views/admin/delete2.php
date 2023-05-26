<?php
include_once("../../DbControllers/DbConnect.php");
$conn = Database::getInstance()->getConnection();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$doc_id = $_POST['doc_id'];
$sql = "DELETE FROM doctor WHERE doc_id = '$doc_id'";

if ($conn->query($sql) === TRUE) {
    echo true;
} else {
    echo "Error deleting doctor: " . $conn->error;
}

$conn->close();
