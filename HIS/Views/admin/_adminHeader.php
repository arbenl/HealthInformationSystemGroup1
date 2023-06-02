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
    <link rel="stylesheet" type="text/css" href="assets/css/adminviev.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/p2opper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>HIS</title>
</head>
<body>
<header>
 
 <h1>ADMIN VIEW      </h1>
</header>
<nav>
    <!-- Add a navigation bar with links to different sections of the patient management page -->
    <ul>
      <li><a href="adminView.php">Menaxhimi i Usereve</a></li>
      <li><a href="doctorManagement.php">Menaxhimi i doktoreve</a></li>
      <li><a href="recnurseList.php">Menaxhimi i infermiereve</a></li>
      
    
      
      
        
   
    </ul>

    <a href="Functions/logout.php" class="logout-button">Log out</a>
  </nav>
