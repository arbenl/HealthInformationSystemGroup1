<?php
// Establish database connection
include_once("DbControllers/DbConnect.php");

function selectDataById($tableName, $id) {
  $conn = Database::getInstance()->getConnection();

  // Check for errors in the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Build SQL query
  $sql = "SELECT * FROM $tableName WHERE user_id = ?";
  
  // Prepare and execute the SQL query
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('i', $id);
  $stmt->execute();
  
  // Convert result to array
  $result = $stmt->get_result();
  $data = array();
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    foreach ($row as $columnName => $columnValue) {
      $data[$columnName] = $columnValue;
    }
  } else {
    return 0;
  }

  // Close statement and database connection
  $stmt->close();
  $conn->close();
  
  // Return result as array
  return $data;
}

// Start the session
session_start();

// Include necessary PHP files for views
include('Views/doc/_docHeader.php');
include("Views/doc/_terapiaView.php");

$docUserId = $_SESSION['ID'];
$doc = selectDataById('doctor', $docUserId);
$doc_id = $doc['id'];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $patient_id = $_POST['id'];
  $data = $_POST['data'];
  $diagnoza = $_POST['diagnoza'];
  $udhezimet = $_POST['udhezimet'];

  // Generate unique prescription ID between 1 and 1000
  $prescription_id = mt_rand(1, 1000);

  // Connect to the database (replace with your database credentials)
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'healthinformationsystem';

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // Prepare and execute the SQL query
  $stmt = $conn->prepare('INSERT INTO prescriptions (prescription_id, patient_id, doc_id, prescription_date, diagnosis, instructions) VALUES (?, ?, ?, CURDATE(), ?, ?)');
  $stmt->bind_param('iisss', $prescription_id, $patient_id, $doc_id, $diagnoza, $udhezimet);
  $stmt->execute();

  // Check if the query was successful
  if ($stmt->affected_rows > 0) {
    echo 'Form submitted successfully!';
  } else {
    echo 'Error submitting the form.';
  }

  // Close the statement and database connection
  $stmt->close();
  $conn->close();
}
?>
