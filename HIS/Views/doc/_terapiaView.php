<?php
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
  $dbname = 'healthinformationsystem.sql';

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // Prepare and execute the SQL query
  $stmt = $conn->prepare('INSERT INTO Eprescription (prescription_id, patient_id, prescription_date, diagnosis, instructions) VALUES (?, ?, ?, ?, ?)');
  $stmt->bind_param('issss', $prescription_id, $patient_id, $data, $diagnoza, $udhezimet);
  $stmt->execute();

  // Check if the query was successful
  if ($stmt->affected_rows > 0) {
    echo 'Form submitted successfully!';
  } else {
    echo 'Error submitting the form.';
  }

  // Close the database connection
  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Terapia Form</title>
</head>
<body>
  <h1>Terapia</h1>

  <form method="POST" action="">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required>

    <label for="data">Data:</label>
    <input type="date" id="data" name="data" required>

    <label for="diagnoza">Diagnoza:</label>
    <textarea id="diagnoza" name="diagnoza" rows="4" cols="50" required></textarea>

    <label for="udhezimet">Udh&euml;zimet:</label>
    <textarea id="udhezimet" name="udhezimet" rows="4" cols="50" required></textarea>

    <input type="submit" value="Submit">
  </form>

</body>
</html>

