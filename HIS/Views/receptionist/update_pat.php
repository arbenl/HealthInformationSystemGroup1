<?php
//Futini te dhenat tuaja personale te MySql per lidhje ne databazen qe e keni ne serverin local

class Database {
  private static $instance = null;
  private $connection;
  private $host = 'localhost';
  private $username = 'root';//By default tek te gjithe serverat eshte root
  private $password = '';//By default eshte pa password
  private $database = 'healthinformationsystem';//Emrin e databazes

  private function __construct() {
    $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
    if ($this->connection->connect_error) {
      die("Connection failed: " . $this->connection->connect_error);
    }
  }

  public static function getInstance() {
    if (!self::$instance) {
      self::$instance = new Database();
    }
    return self::$instance;
  }

  public function getConnection() {
    return $this->connection;
  }
}
?>
<?php


// Establish a database connection
$conn = Database::getInstance()->getConnection();

// Check if the connection was successful
if ($conn) {
  // Check if the request is a POST request
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the user data from the POST request

    // Perform the database update operation
// Perform the database update operation
$query = "UPDATE `patients` SET `user_id` = ?, `first_name` = ?, `last_name` = ?, `date_of_birth` = ?, `gender` = ?, `phone_number` = ?, `email` = ?, `street` = ?, `city` = ?, `post_code` = ? WHERE `patient_id` = ?";
$stmt = $conn->prepare($query);

$patientId = $_POST['updatePatientId'];
$userId = $_POST['updateUserId'];
$firstName = $_POST['updateFirstName'];
$lastName = $_POST['updateLastName'];
$birthdate = $_POST['updateBirthdate'];
$gender = $_POST['updateGender'];
$phone = $_POST['updatePhone'];
$email = $_POST['updateEmail'];
$street = $_POST['updateStreet'];
$city = $_POST['updateCity'];
$postcode = $_POST['updatePostcode'];

$stmt->bind_param("isssssssssi", $userId, $firstName, $lastName, $birthdate, $gender, $phone, $email, $street, $city, $postcode, $patientId);


    if ($stmt->execute()) {
        // Update successful
        echo "<!DOCTYPE html>
              <html>
              <head>
                <title>Success Page</title>
                <style>
                  body {
                    background-color: #f2f2f2;
                    font-family: Arial, sans-serif;
                  }
                  
                  .container {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    height: 100vh;
                  }
                  
                  .success-icon {
                    font-size: 80px;
                    color: #33cc33;
                  }
                  
                  .title {
                    font-size: 24px;
                    margin-top: 20px;
                    text-align: center;
                  }
                  
                  .button {
                    display: inline-block;
                    background-color: #4CAF50;
                    color: #ffffff;
                    border: none;
                    padding: 10px 20px;
                    text-align: center;
                    text-decoration: none;
                    font-size: 16px;
                    margin-top: 20px;
                    cursor: pointer;
                    border-radius: 4px;
                  }
                </style>
              </head>
              <body>
                <div class='container'>
                  <span class='success-icon'>&#10004;</span>
                  <h1 class='title'>Changes Made Successfully</h1>
                  <a class='button' href='another-page.html'>Go Back</a>
                </div>
              </body>
              </html>";
      } else {
        // Update failed
        echo "<!DOCTYPE html>
              <html>
              <head>
                <title>Error Page</title>
                <style>
                  body {
                    background-color: #f2f2f2;
                    font-family: Arial, sans-serif;
                  }
                  
                  .container {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    height: 100vh;
                  }
                  
                  .error-icon {
                    font-size: 80px;
                    color: #ff3300;
                  }
                  
                  .title {
                    font-size: 24px;
                    margin-top: 20px;
                    text-align: center;
                  }
                  
                  .message {
                    font-size: 16px;
                    margin-top: 10px;
                    text-align: center;
                  }
                  
                  .button {
                    display: inline-block;
                    background-color: #ff3300;
                    color: #ffffff;
                    border: none;
                    padding: 10px 20px;
                    text-align: center;
                    text-decoration: none;
                    font-size: 16px;
                    margin-top: 20px;
                    cursor: pointer;
                    border-radius: 4px;
                  }
                </style>
              </head>
              <body>
                <div class='container'>
                  <span class='error-icon'>&#10006;</span>
                  <h1 class='title'>Changes Failed</h1>
                  <p class='message'>An error occurred while updating the database.</p>
                  <button class='button' onclick='location.reload()'>Retry</button>
                </div>
              </body>
              </html>";
      }
    // Close the prepared statement
    $stmt->close();
  }
  
  // Close the database connection
  $conn->close();
}

exit;
?>
