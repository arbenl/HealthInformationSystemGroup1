<?php
include("DbControllers/DbConnect.php");


session_start();
$conn = Database::getInstance()->getConnection();

if (isset($_POST["submit"])) {

    // Retrieve form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $personalnr = mysqli_real_escape_string($conn, $_POST['personalnr']);
    $profession = mysqli_real_escape_string($conn, $_POST['profession']);




    if (empty($username) || empty($email) || empty($password)) {
        $_SESSION['message'] = "Please fill in all fields.";
    } else {

        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $query);
        $role = "patient";
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['messageFromSignup'] = "User already exists with that username.";

//            header("Location: SignUpPage.php");
        } else {
            // Insert new user into database
            $query = "INSERT INTO `users` (`surname`, `personalnr`, `profession`, `username`, `email`, `password`, `name`, `role`, phone) VALUES ('$surname','$personalnr','$profession', '$username', '$email', '$password', '$name', '$role', '$phone')";
            $result = mysqli_query($conn, $query);
            header("Location: LoginPage.php");
            if($result){
                header("Location: LoginPage.php");
                $_SESSION['messageFromSignup'] = "Llogarija u krijua me sukses!";
            }else{
                $_SESSION['messageFromSignup'] = "Krijimi deshtoi, provoni perseri!";
                header("Location: SignUpPage.php");

            }
        }

        // Close database connection
        mysqli_close($conn);
    }
}


?>