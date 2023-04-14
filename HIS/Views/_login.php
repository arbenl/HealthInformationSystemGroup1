<div class="login-box">
    <?php
    if (isset($_SESSION['message'])) {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong>
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php

        unset($_SESSION['message']);
    }

    ?>
    <p>Login</p>
    <form  method="post">
        <div class="user-box">
            <input  name="username" type="text" required>
            <label>Email</label>
        </div>
        <div class="user-box">
            <input  name="password" type="password" required>
            <label>Password</label>
        </div>
        <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" value="Submit">
        </a>
    </form>
    <p>Don't have an account? <a href="SignUpPage.php" class="a2">Sign up!</a></p>
</div>
