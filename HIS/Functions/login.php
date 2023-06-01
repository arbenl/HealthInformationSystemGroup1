<?php
include_once("DbControllers/DbConnect.php");

session_start();
$conn = Database::getInstance()->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errorMsg = "";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
}

if (!empty($username) || !empty($password)) {
    $query = "SELECT * FROM user WHERE user_name = '$username' AND user_password = '$password'";
    $login_query_run = mysqli_query($conn, $query);

    if ($login_query_run->num_rows > 0) {
        $_SESSION['auth'] = true;
        $row = $login_query_run->fetch_assoc();

        $_SESSION['ID'] = $row['user_id'];
        $_SESSION['ROLE'] = $row['user_role'];
        $_SESSION['USERNAME'] = $row['user_name'];
        $_SESSION['EMAIL'] = $row['user_email'];
        $_SESSION['MOBILE'] = $row['user_mobile'];

        $userid = $row['user_id'];
        $username = $row['user_name'];
        $_SESSION['auth_user'] = [
            'user_name' => $username,
            'user_id' => $userid
        ];

        if ($row['user_role'] == "admin") {
            header('Location: adminView.php');
        } else if ($row['user_role'] == "user") {
            header("Location: patientView.php");
        } else if ($row['user_role'] == "staff") {
            header("Location: docView.php");
        } else if ($row['user_role'] == "receptionist") {
            header("Location: receptionistView.php");
        }
        die();
    } else {
        $errorMsg = "No user found with this username";
        $_SESSION['message'] = $errorMsg;
    }
} else {
    $errorMsg = "Username and Password are required";
}
?>
