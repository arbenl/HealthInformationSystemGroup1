<?php
include('Functions/login.php');


//NEXT LINES CHECK IF THE USER ISN'T LOGGED IN THAN REDIRECT TO THE NOTFOUND PAGE!!
$role = $_SESSION['ROLE'];
if (!isset($_SESSION['auth'])) {
    header("Location:LoginPage.php");
} else if ($role != 'receptionist') {
    header("Location:Views/NotFound/pagenotfound.php");
}
//WE ARE GOING TO CONSTANTLY USE PHP SESSIONS TO CHECK USER VALIDATION AND OTHER STUFF !!
?>
<!DOCTYPE html>
<html>

<head>
    <title>Menaxhimi i spitalit </title>


    <link rel="stylesheet" type="text/css" href="assets/css/hmng.css">


</head>

<body>
    <header>

        <h1>Menaxhimi i spitalit</h1>
    </header>

    <nav>
        <!-- Add a navigation bar with links to different sections of the hospital management page -->
        <ul>

            <li><a href="doctorManagement.php">Menaxhimi i doktoreve</a></li>
            <li><a href="infermier.html">Menaxhimi i infermiereve</a></li>
            <li><a href="mngpac.html">Menaxhimi i pacienteve</a></li>
            <li><a href="terminet.html">Menaxhimi i termineve</a></li>
            <li >
                <a  href="Functions/logout.php">LogOut</a>
            </li>
        </ul>
    </nav>

    <img src="assets/pic/hospital.jpg" alt="Image" class="image">