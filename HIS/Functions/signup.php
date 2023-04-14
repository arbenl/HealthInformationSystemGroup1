




<?php
include("DbControllers/DbConnect.php");


session_start();
$conn = Database::getInstance()->getConnection();

if (isset($_POST["Submit"])) {

    // Retrieve form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password =mysqli_real_escape_string($conn, $_POST['password']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);




    if (empty($username) || empty($email) || empty($password)) {
        $_SESSION['message'] = "Please fill in all fields.";
    } else {

        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $query);
        $role = "patient";
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['message'] = "User already exists with that username.";

//            header("Location: SignUpPage.php");
        } else {
            // Insert new user into database
            $query = "INSERT INTO `users` (`username`, `password`, `role`, `email`) VALUES ('$username','$password','$role', '$email')";
            $result = mysqli_query($conn, $query);

                header("Location: LoginPage.php");

        }

        // Close database connection
        mysqli_close($conn);
    }
}


?>