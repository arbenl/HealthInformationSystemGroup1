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



session_start();
$conn = Database::getInstance()->getConnection();

if (isset($_POST["submit"])) {

    // Retrieve form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);





    if (empty($username) || empty($email) || empty($password)) {
        $_SESSION['message'] = "Please fill in all fields.";
    } else {

        $query = "SELECT * FROM user WHERE user_name='$username'";
        $result = mysqli_query($conn, $query);
        $role = "user ";
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['messageFromSignup'] = "User already exists with that username.";

            header("Location: ../SignUpPage.php");
        } else {
            // Insert new user into database
            $query = "INSERT INTO `user` (user_name, user_password,user_role, user_mobile, user_email) VALUES ('$username', '$password','$role', '$phone', '$email')";
            $result = mysqli_query($conn, $query);
            if($result){
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
                  <a class='button' href='LoginPage.php'>Go Back</a>
                </div>
              </body>
              </html>";
                $_SESSION['messageFromSignup'] = "Llogarija u krijua me sukses!";

            }else{
                $_SESSION['messageFromSignup'] = "Krijimi deshtoi, provoni perseri!";
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
                  <button class='button' onclick='SignUpPage.php'>Go Back</button>
                </div>
              </body>
              </html>";

            }
        }

        // Close database connection
        mysqli_close($conn);
    }
}


?>