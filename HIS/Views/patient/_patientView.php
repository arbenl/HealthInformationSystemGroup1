<?php
include_once("DbControllers/DbConnect.php");


$conn = Database::getInstance()->getConnection();

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form fields
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $date_of_birth = $_POST["date_of_birth"];
    $gender = $_POST["gender"];
    $phone_number = $_POST["phone"];
    $email = $_POST["email"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $post_code = $_POST["post_code"];
    
    // Generate a random patient_id
    $min_patient_id = 1000; // Minimum value for patient_id
    $max_patient_id = 10000000; // Maximum value for patient_id
    $random_patient_id = mt_rand($min_patient_id, $max_patient_id);
    $userid = $_SESSION['ID'];

    // Prepare and execute the SQL query
    $sql = "INSERT INTO patients (user_id, patient_id, first_name, last_name, date_of_birth, gender, phone_number, email, street, city, post_code)
            VALUES ('$userid','$random_patient_id', '$first_name', '$last_name', '$date_of_birth', '$gender', '$phone_number', '$email', '$street', '$city', '$post_code')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection

?>



<?php

$tableName = "patients";

$result = selectDataById($tableName, $_SESSION['ID']);
if(!$result){
    ?>
    <div class="regjistimi">
    <h1>Regjistro te dhenat tuaja</h1>

    <form action="" method="POST">


        <label for="username" class="label">Emri:</label>
        <input type="text" id="username" name="first_name" placeholder="Shkruani Emrin" class="input" required>

        <label for="email" class="label">Mbiemri:</label>
        <input type="text" id="email" name="last_name" placeholder="Shkruani Mbiemrin" class="input" required>

        <label for="email" class="label">Data e Lindjes:</label>
        <input type="date" id="phone" name="date_of_birth" placeholder="Shkruani Daten e Lindjes" class="input" required>

        
        <label for="email" class="label">Gjinia</label>
        <select name="gender" id="gender" class="input">
            <option value="male">
                Mashkull
            </option>
            <option value="female">
                Femer
            </option>
        </select>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="input" value="<?=$_SESSION['EMAIL']?>"required>

        <label for="phone">Pone</label>
        <input type="text" name="phone" id="phone" class="input" value="<?=$_SESSION['MOBILE']?>"required>

        <label for="street">Rruga</label>
        <input type="text" name="street" id="street" class="input" placeholder="Shkruani rrugen ku jetoni"required>
        
        <label for="city">Qyteti</label>
        <input type="text" name="city" id="city" class="input" placeholder="Shkruani Qytetin ku jetoni"required>
        <label for="post_code">Post Code</label>
        <input type="number" name="post_code" id="city" class="input" placeholder="Shkruani Qytetin ku jetoni"required>


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

    <?php
}else{
$address=$result['city'] . $result['street'] .$result['post_code'];
$_SESSION['patient_id'] = $result['patient_id'];
?>
<div class="user-box">
    <h1>Health Information System Kosova</h1>
    <h2>User Profile</h2>
    <img src="User.png" alt="user">
    <h3><?=$_SESSION['USERNAME']?></h3>

    <div class="user-information">
        <h4>Informacionet Personale: </h4>
        <hr>
        <div>
            <p id="id">Emri i pacientit: </p>
            <p><?=$result['first_name']?></p>
        </div>
        <hr>
        <div>
            <p id="id">Mbiemri i pacientit:</p>
            <p><?=$result['last_name']?></p>
            <hr>
        </div>
        <div>
            <p id="id">Datëlindja:</p>
            <p><?=$result['date_of_birth']?></p>
        </div>
        <hr>
        <div>
            <p id="id">Email:</p>
            <p><?=$result['email']?></p>
        </div>
        <hr>
        <hr>
        <div>
            <p id="id">Gjinia:</p>
            <p><?=$result['gender']?></p>
        </div>
        <hr>
        <div>
            <p id="id">Adresa:</p>
            <p>  <?=$address?></p>
        </div>
        <hr>
        <div>
            <p id="id">Telefoni:</p>
            <p><?=$result['phone_number']?></p>
        </div>
        <hr>
    </div>

    <div class="kalendari-button">
        <p>Klikoni këtu për kalendarin e termineve tuaj</p>
        <div class="button">
            <a href="patientAppointments.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Kalendari
            </a>
        </div>
    </div>

</div>



<style>


    body{

        background-image: url(assets/img/pic6.jpg);
        color: #fff;
        font-size: 17px;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .user-box{
        position: relative;
        left:31%;
        width:725px;

        padding: 40px;

        background-color: rgba(33, 90, 99, 0.5);
        box-sizing:border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,6);
        border-radius: 10px;
        font-size: 18px;
    }

    .user-box h1{
        margin:0 0 30px;
        padding:0;
        color: #03e9f4;
        text-align:center;
    }
    .user-box h2{
        margin:0 0 30px;
        padding-bottom: 30px;
        color: #fff;
        text-align:center;
    }
    .user-box img{
        width: 30%;
        height: 15%;
        margin-left: 35%;
    }
    .user-box h3{
        margin:0 0 30px;
        padding-bottom:40px;
        color:rgb(165, 215, 232);
        text-align:center;
    }
    .user-box h4{
        margin: auto;
        font-size: 20px;
    }

    #id{
        color: #03e9f4;
    }


    .kalendari-button{
        margin-top: 20px;
        display: flex;
    }

    .kalendari-button p{
        padding-top: 62px;
        font-size: 20px;
        color: #03e9f4;
    }

    .kalendari-button .button{
        margin-left: 10px;
    }

    .kalendari-button .button a{
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        top: 40px;
        margin-bottom: 50px;
        margin-left: 42%;
        color:#03e9f4;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 30px;
        letter-spacing: 4px;
    }
    .kalendari-button .button a:hover{
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
        0 0 25px #03e9f4,
        0 0 50px #03e9f4,
        0 0 100px #03e9f4;
    }
    .kalendari-button a span{
        position: absolute;
        display: block;
    }
    .kalendari-button a span:nth-child(1){
        top: 0;
        left: -100%;
        width: 100px;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
    }
    @keyframes btn-anim1{
        0%{
            left:-100%;
        }
        50%,100%{
            left:100%;
        }
    }
    .kalendari-button a span:nth-child(2){
        top: -100px;
        right: 0;
        width: 2px;
        height: 100px;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }
    @keyframes btn-anim2{
        0%{
            top:-100%;
        }
        50%,100%{
            top:100%;
        }
    }
    .kalendari-button a span:nth-child(3){
        bottom: 0;
        right: -100%;
        width: 100px;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }
    @keyframes btn-anim3{
        0%{
            right:-100%;
        }
        50%,100%{
            right:100%;
        }
    }
    .kalendari-button a span:nth-child(4){
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100px;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }
    @keyframes btn-anim4{
        0%{
            bottom:-100%;
        }
        50%,100%{
            bottom:100%;
        }
    }
    
</style>
    <?php
}
?>









