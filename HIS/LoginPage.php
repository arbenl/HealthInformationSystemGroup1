<?php
include('Views/header.php');
if (isset($_SESSION['auth'])){
    header("Location:Views/NotFound/pagenotfound.php");
}
?>
<!--Log in function here -->

    <!--Log in view here -->
<?php
include ("Views/_login.php")
?>
    <!--Footer view here -->
<?php
include('Views/footer.php');
?>