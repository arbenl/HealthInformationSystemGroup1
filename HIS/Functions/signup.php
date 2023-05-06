<?php
include_once("DbControllers/DbConnect.php");
include_once("Functions/data.php");


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

        $query = "SELECT * FROM user WHERE use_rname='$username'";
        $result = mysqli_query($conn, $query);
        $role = "patient";
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['messageFromSignup'] = "User already exists with that username.";

//            header("Location: SignUpPage.php");
        } else {
            // Insert new user into database
            $query = "INSERT INTO `user` (user_name, user_password, user_mobile, user_email) VALUES ('$username', '$password', '$phone', '$email')";
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