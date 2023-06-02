<?php 
include('Views/receptionist/_recHeader.php');
include('Views/receptionist/_pacManView.php');
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
    $firstName = $_POST['updateFirstName'];
    $lastName = $_POST['updateLastName'];
    $birthdate = $_POST['updateBirthdate'];
    $gender = $_POST['updateGender'];
    $phone = $_POST['updatePhone'];
    $email = $_POST['updateEmail'];
    $street = $_POST['updateStreet'];
    $city = $_POST['updateCity'];
    $postcode = $_POST['updatePostcode'];

    // Generate a random patient_id between 10000 and 99999
    $patientId = mt_rand(10000, 99999);

    // Prepare and execute the SQL statement to insert the data into the database
    $stmt = $conn->prepare("INSERT INTO patients (patient_id, user_id, first_name, last_name, date_of_birth, gender, phone_number, email, street, city, post_code) VALUES (:patientId, :userId, :firstName, :lastName, :birthdate, :gender, :phone, :email, :street, :city, :postcode)");
    $stmt->bindParam(':patientId', $patientId);
    $stmt->bindParam(':userId', $userId);
    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':birthdate', $birthdate);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':street', $street);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':postcode', $postcode);
    $stmt->execute();

    exit;
}
?>
