<?php
include_once("DbControllers/DbConnect.php");

session_start();
$conn = Database::getInstance()->getConnection();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errorMsg = "";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
//  $password1 = password_verify($password, PASSWORD_DEFAULT);
    $password =mysqli_real_escape_string($conn, $_POST['password']);

}

if (!empty($username) || !empty($password)) {
    $query = "SELECT * FROM user WHERE user_name = '$username' and user_password = '$password'";
    $login_query_run = mysqli_query($conn, $query);
    if ($login_query_run->num_rows > 0) {
        $_SESSION['auth'] = true;
        $row = $login_query_run->fetch_assoc();
        $userdata = mysqli_fetch_array($login_query_run);
        $_SESSION['ID'] = $row['user_id'];
        $_SESSION['ROLE'] = $row['user_role'];

        $userid = $userdata['user_id'];
        $username = $userdata['user_name'];
        $_SESSION['auth_user'] = [
            'user_name'=> $username,
            'user_id'=> $userid
        ];
        if ($row['user_role'] == "admin") {
            header('Location:adminView.php');
        } else if ($row['user_role'] == "user") {
            header("Location:patientView.php");
        } else if ($row['user_role'] == "staff") {
            header("Location:docView.php");
        }
        die();
    } else {
        $errorMsg = "No user found with this username";
        $_SESSION['message'] = $errorMsg;
    }
} else {
$errorMsg = "Username and Password is required";
}

?>
