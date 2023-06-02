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
    $userId = $_POST['updateUserId'];
    $fullName = $_POST['updateFullName'];
    $docSpecialty = $_POST['updateDocSpecialty'];
    $phone = $_POST['updatePhone'];
    $email = $_POST['updateEmail'];

    // Prepare and execute the SQL statement to insert the data into the database
    $stmt = $conn->prepare("INSERT INTO doctor (user_id, doc_name, doc_specialty, doc_mobile, doc_email) VALUES (:userId, :fullName, :docSpecialty, :phone, :email)");
    $stmt->bindParam(':userId', $userId);
    $stmt->bindParam(':fullName', $fullName);
    $stmt->bindParam(':docSpecialty', $docSpecialty);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    exit;
}
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
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["updateDoctor"])) {
    // Get the form data
    $docId = $_POST['updateDocId'];
    $userId = $_POST['updateUserId'];
    $fullName = $_POST['updateFullName'];
    $docSpec = $_POST['updateDocSpec'];
    $docMobile = $_POST['updateDocMobile'];
    $email = $_POST['updateEmail'];

    // Prepare and execute the SQL statement to update the doctor's information in the database
    $stmt = $conn->prepare("UPDATE doctor SET user_id = :userId, full_name = :fullName, doc_specialty = :docSpec, doc_mobile = :docMobile, doc_email = :email WHERE doc_id = :docId");
    $stmt->bindParam(':docId', $docId);
    $stmt->bindParam(':userId', $userId);
    $stmt->bindParam(':fullName', $fullName);
    $stmt->bindParam(':docSpec', $docSpec);
    $stmt->bindParam(':docMobile', $docMobile);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    exit;
}
?>







