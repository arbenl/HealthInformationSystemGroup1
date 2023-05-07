<?php
include('Functions/login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
          integrity="sha384-Y24ZG4+N4g4zKjGsTT9lWOGQ70ai04OoYzQ0kGjMx3BXZzT6Zlf0GKsU6E17jflD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap-icons.css"
          integrity="sha384-yU/4MNwI8CJW4g1nvzRGp4I/iEB+8c1BQvhgBzFO/ZY+HXKH47fvxhWgxC+HeZu" crossorigin="anonymous">


    <link rel="stylesheet" href="assets/css/maicons.css">

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="assets/css/theme.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"
            integrity="sha384-JZR6SpejhOJoVatIVMou/ChYoYBtRVHp8zOGUFfFY1qzu2Zazt+OoA6XJm2Jm/+S"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
            integrity="sha384-XlPpNvP/7w/8gT1QZT/NK+RYVLV9lyz+0Ax1ep7ouuKfsa76Vd12u8MhJn7aPpgL"
            crossorigin="anonymous"></script>

    <title>Hospital Menagment</title>

</head>

<body>


<div class="back-to-top"></div>


<nav class="navbar navbar-expand-lg bg-light navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php"><span class="text-primary">Hospital</span> Menagment</a>


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
                    <a class="nav-link" href="">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
                </li>
                <?php
                if (!isset($_SESSION['auth'])) { ?>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="LoginPage.php">Login / Register</a>
                    </li>
                    <?php
                } else if ($_SESSION["ROLE"] == "user") {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="patientView.php">Health Center</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="Functions/logout.php">LogOut</a>
                    </li>
                    <?php
                } else if ($_SESSION["ROLE"] == "admin") {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="adminView.php">Admin Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="Functions/logout.php">LogOut</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
