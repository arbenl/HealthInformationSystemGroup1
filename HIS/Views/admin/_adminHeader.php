<!DOCTYPE html>
<?php
include ('Functions/login.php');


//NEXT LINES CHECK IF THE USER ISN'T LOGGED IN THAN REDIRECT TO THE NOTFOUND PAGE!!
$role = $_SESSION['ROLE'];
if (!isset($_SESSION['auth'])){
    header("Location:LoginPage.php");
}else if($role != 'admin'){
    header("Location:Views/NotFound/pagenotfound.php");
}
//WE ARE GOING TO CONSTANTLY USE PHP SESSIONS TO CHECK USER VALIDATION AND OTHER STUFF !!
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>HIS</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">User Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home</a>
            <a class="nav-item nav-link active" href="#">Users</a>

            <a class="nav-item nav-link" href="Functions/logout.php">LogOut</a>

        </div>
    </div>
</nav>