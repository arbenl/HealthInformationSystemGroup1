<?php

include("DbControllers/DbConnect.php");

session_start();
$conn = Database::getInstance()->getConnection();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errorMsg = "";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password =mysqli_real_escape_string($conn, $_POST['password']);
//  $password1 = password_verify($password, PASSWORD_DEFAULT);

    if (!empty($username) || !empty($password)) {
        $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $login_query_run = mysqli_query($conn, $query);
        if ($login_query_run->num_rows > 0) {
            $_SESSION['auth'] = true;
            $row = $login_query_run->fetch_assoc();
            $userdata = mysqli_fetch_array($login_query_run);
            $_SESSION['ID'] = $row['userid'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['emri'];

            $userid = $userdata['userid'];
            $username = $userdata['username'];
            $_SESSION['auth_user'] = [
                'username'=> $username,
                'user_id'=> $userid
            ];
            if ($row['role'] == "admin") {
                header('Location:adminView.php');
            } else if ($row['role'] == "user") {
                header("Location:patientView.php");
            } else if ($row['role'] == "staff") {
                header("Location:docView.php");
            }
            die();
        } else {
            $errorMsg = "No user found on this username";
            $_SESSION['message'] = $errorMsg;
        }
    } else {
        $errorMsg = "Username and Password is required";
    }
}

?>