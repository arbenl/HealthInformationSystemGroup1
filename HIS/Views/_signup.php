<div class="regjistimi">
    <h1>Regjistrimi</h1>
    <?php
    if (isset($_SESSION['messageFromSignup'])) {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong>
            <?= $_SESSION['messageFromSignup']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php

        unset($_SESSION['messageFromSignup']);
    }

    ?>
    <form method="POST">

        <label for="username" class="label">Username</label>
        <input type="text" id="username" name="username" placeholder="Shkruani username" class="input" required = "*">

        <label for="email" class="label">Email</label>
        <input type="email" id="email" name="email" placeholder="Shkruani e-Mail" class="input" required>

        <label for="email" class="label">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Shkruani telefonin" class="input" required>

        <label for="password" class="label">Password</label>
        <input type="password" id="password" name="password" placeholder="Shkruani fjalkalimin" class="input" required>



        <input type="submit" name="submit" value="Regjistrohu">
    </form>


    <div class="mbrapa">
        <a href="LoginPage.php">Keni llogari? Kycu tani!</a>
    </div>
</div>

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

    .headerregister {
        height: 200px;

        position: relative;

    }

    .headerregister h1 {

        font-size: 45px;
        font-family: 'Pacifico';
        position: absolute;
        top: 20px;
        left: 0;
        right: 0;
        text-align: center;
    }


    .regjistimi {
        background-color: #fff;
        width: 500px;
        margin: 50px auto;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);


    }

    .regjistimi h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: grid;
        grid-template-columns: auto 1fr;
        grid-column-gap: 10px;
        align-items: center;
    }

    label {
        margin-bottom: 10px;
    }


    input {
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    }

    input[type="submit"] {
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


    a {
        color: #1ea9d3;
    }

    .mbrapa {
        align-self: center;
        margin-top: 20px;
    }
</style>