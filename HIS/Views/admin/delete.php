<?php
include_once("../../DbControllers/DbConnect.php");
$conn = Database::getInstance()->getConnection();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_POST['user_id'];
$sql = "DELETE FROM user WHERE user_id = '$user_id'";

if ($conn->query($sql) === TRUE) {
    echo true;
} else {
    echo "Error deleting user: " . $conn->error;
}

$conn->close();
