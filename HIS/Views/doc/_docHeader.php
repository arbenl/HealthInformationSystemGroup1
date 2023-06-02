<?php session_start();?>


<!DOCTYPE html>
<html>
<head>
  <title>Doktor VIEW</title>
<style>

.button-container {
  display: flex;
  justify-content: flex-end;
}

.logout-button {
  
  background-color: #3caea3;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  float:right;
}

  

</style>
  
  <link rel="stylesheet" type="text/css" href="assets/css/doctorview.css">
  <link rel="stylesheet" type="text/css" href="assets/css/terapia.css">


</head>
<body>
  <header>
 
    <h1>Doktor VIEW</h1>
  </header>

  <nav>
    <!-- Add a navigation bar with links to different sections of the patient management page -->
    <ul>
        <li><a href="#">Profili</a></li>
        <li><a href="#">Lista e termineve </a></li>
        <li><a href="docTerapia.php">Cakto terapine </a></li>
        
    </ul>

    <img src="assets/img/pacient.jpg" alt="Image" class="image">
    <div class="button-container">
    <a href="Functions/logout.php" class="logout-button">Log out</a>
</div> 
  </nav>

  

  