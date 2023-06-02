<?php
include('Views/admin/_adminHeader.php');
include("Functions/data.php");
?>
<?php
include('Views/admin/_doctorManagement.php');
?>


<?php  
$dbname = "healthinformationsystem";

// Change these to your own database credentials
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

// Create a new PDO instance and connect to the database
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

// Set error mode to exception to catch any database errors
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["insertUser"])) {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $phone = $_POST['phone'];
    $email = $_POST['e-mail'];
    $address = $_POST['address'];

    // Prepare and execute the SQL statement to insert the data into the database
    $stmt = $conn->prepare("INSERT INTO user (user_name,user_password, user_role, user_mobile, user_email, user_address) VALUES (:username,:password, :role, :phone, :email, :address)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password',$password);
    $stmt->bindParam(':role', $role);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);
    $stmt->execute();

    
    
    exit;
    
}

?>






