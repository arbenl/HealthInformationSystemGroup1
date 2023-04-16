



    <div class="login">
        <h1>Identifikimi</h1>
        <?php
        if (isset($_SESSION['message']) || isset($_SESSION['messageFromSignup']) ) {
        if (isset($_SESSION['message'])){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong>

                <?= $_SESSION['message']; ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php
        }elseif(isset($_SESSION['messageFromSignup'])){
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong>

            <?= $_SESSION['messageFromSignup']; ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
            <?php
            }
            ?>

            <?php

            unset($_SESSION['message']);
            unset($_SESSION['messageFromSignup']);
        }

        ?>
        <form  method="post">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Shkruani username-in" required>
  
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Shkruani password-in" required>
  
          <button type="submit">Identifikohu</button>
  
          <div class="forgot-password">
            <a href="#">Keni harruar fjalekalimin?</a>
          </div>
  
          <div class="sign-up">
            Nese nuk keni llogari? <a href="SignUpPage.php">Regjistrohu ketu</a>
          </div>
        </form>
      </div>

    <!-- <p>Login</p>
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
    <p>Don't have an account? <a href="SignUpPage.php" class="a2">Sign up!</a></p> -->

    <style>
        * {
    margin: 0;
    padding: 0;
}
body {
    min-width: 400px;
    background-image: url("img/pic1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  }
  
.header {
    height: 50px;
 
    position: relative;

}
  .header h1{
    font-size: 40px;
    font-family: 'Pacifico' ;

    position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;


  }
  .login {
    background-color: #fff;
    width: 300px;
    margin: 50px auto;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }

  h1 {
    text-align: center;
    margin-bottom: 20px;
  }
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  label {
    margin-bottom: 10px;
  }
  
  input[type="text"],
  input[type="password"] {
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  }
  
  button[type="submit"] {
    background-color: #4c98af;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  button[type="submit"]:hover {
    background-color: #085168;
  }
  
  .forgot-password,
  .sign-up {
    text-align: center;
    margin-top: 20px;
  }
  
  a {
    color: #1ea9d3;
  }

    </style>

