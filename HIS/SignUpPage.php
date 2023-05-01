
<?php
include('Views/header.php');
?>
<!--Log in function here -->
<?php

if (isset($_SESSION['auth'])){
    header("Location:Views/NotFound/pagenotfound.php");
}
?>
<!--Log in view here -->
<?php
include ("Views/_signup.php")
?>
<!--Footer view here -->
<?php
include('Views/footer.php');
?>