<?php
if (isset($_POST['submit'])) {
    include_once("DbControllers/DbConnect.php");
    include_once("Functions/data.php");


    $conn = Database::getInstance()->getConnection();
    $id = $_SESSION['ID'];
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $cols = array("pat_userid", "pat_name", "pat_gender", "pat_age", "pat_email", "pat_mobile", "pat_address");

$vals = array(
    $id,
    $fullname,
    $gender,
    $age,
    $email,
    $phone,
    $address
);

    $result = insertDataIntoTable("patient", $cols, $vals);
    if ($result == 1){
        $insertMessage = "Data inserted successfully!";
    }else{
        $insertMessage = "Error!" .$conn ->error;

    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Patient Management</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/maicons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="assets/css/theme.css">
</head>

<body>


<div class="back-to-top"></div>


<nav class="navbar navbar-expand-lg bg-light navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php"><span class="text-primary">Health</span> Center</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="patientView.php">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="appointmentScheduling.php">Appointment Scheduling</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link" href="Functions/logout.php">LogOut</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

