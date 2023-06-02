<!DOCTYPE html>


<?php
include ('Functions/login.php');


//NEXT LINES CHECK IF THE USER ISN'T LOGGED IN THAN REDIRECT TO THE NOTFOUND PAGE!!
$role = $_SESSION['ROLE'];

if (!isset($_SESSION['auth'])){
    header("Location: LoginPage.php");
} else if ($role != 'receptionist' && $role != 'admin') {
    header("Location: Views/NotFound/pagenotfound.php");
}

//WE ARE GOING TO CONSTANTLY USE PHP SESSIONS TO CHECK USER VALIDATION AND OTHER STUFF !!
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .close {
            cursor: pointer;
        }
        .modal-dialog-scrollable .modal-body {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/doctor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>HIS</title>
</head>
<body>

<body>
    <header>

        <h1>Menaxhimi i spitalit</h1>
    </header>

    <nav>
        <!-- Add a navigation bar with links to different sections of the hospital management page -->
        <ul>            
            <li><a href="receptionistView.php">Home</a></li>
            <li><a href="recAppointmentMan.php">Terminet</a></li>
            <li><a href="recPatientMan.php">Lista e Pacienteve</a></li>
            <li><a href="recDoctorList.php">Lista Doktorëve</a></li>
            <li><a href="recNurseList.php">Lista Infermiereve</a></li>
            <li ><a  href="Functions/logout.php">LogOut</a></li>
        </ul>
    </nav>
