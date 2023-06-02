<?php

$tableName = "patients";
$docTable = "doctor";
$depTable = "departments";
$departments = getAllTableData($depTable);
$result = selectDataById($tableName, $_SESSION['ID']);



?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Retrieve the selected department value and escape it
    include_once("DbControllers/DbConnect.php");

    $conn = Database::getInstance()->getConnection();
    $selectedDepartment = $_POST['department'];
    $escapedDepartment = mysqli_real_escape_string($conn, $selectedDepartment);

// Retrieve the dep_id value from the selected department
    $depId = explode("_", $escapedDepartment)[0];

// Retrieve the other values from the input fields and escape them
    $patDesc = mysqli_real_escape_string($conn, $_POST['pat_desc']);
    $appointmentDate = mysqli_real_escape_string($conn, $_POST['appointment_date']);
    $startTime = mysqli_real_escape_string($conn, $_POST['start_time']);

// Define the table name, column names, and data
    $tableName = "appointments";
    $columnNames = array("patient_id", "department_id", "pat_desc", "appointment_date", "start_time");
    $data = array($result['patient_id'], $depId, $patDesc, $appointmentDate, $startTime);

// Insert the data into the table
    $result = insertDataIntoTable($tableName, $columnNames, $data);

    if ($result) {
        // Success: Data inserted successfully
        header('Location: appointmentVerification.php');
        exit();
    } else {
        // Error: Failed to insert data
        echo "Error in inserting data.";
    }
}
?>






<div class="appointment-box">
    <h1>Health Information System Kosova</h1>
    <h2>Formulari për termin të pacientit</h2>

    <form method="POST">

        <!--Emri dhe Mbiemri-->
        <div class="text-pacienti">
            <div class="emri">
                <label> Emri: </label>
                <input id=""
                       type="text"
                       name=""
                       required=""
                       value="<?=$result['first_name']?>"
                readonly/></div>
            <div class="mbiemri">
                <label> Mbiemri: </label>
                <input
                    type="text"
                    name=""
                    required=""
                    value="<?=$result['last_name']?>"
                    readonly/></div>
        </div>


        <!--Datëlindja-->
        <div class="text-pacienti">
            <label> Datëlindja: </label>
            <input
                type="date"
                name="datelindja"
                id="datelindja"
                value="<?=$result['date_of_birth']?>"
                readonly/>
        </div>

        <!--Gjinia-->
        <div class="radio-pacienti">
            <label> Gjinia: </label>
            <input
                type="text"
                name="gender"
                value="<?= $result['gender']?>"
                readonly/>
        </div>

        <!--Numri i telefonit-->
        <div class="text-pacienti">
            <label> Numri i telefonit: </label>
            <input
                type="text"
                name="numri"
                id="numri"
                value="<?=$result['phone_number']?>"
                 />
        </div>

        <!--Email-->
        <div class="text-pacienti">
            <label> Email: </label>
            <input
                type="email"
                name="email"
                id="email"
                value="<?=$result['email']?>"
            />
        </div>

        <!--Adresat-->
        <label id="vendbanimi">Detajet e Vendbanimit</label>
        <div class="adresat">

            <div class="v1">
                <div class="text-pacienti">
                    <label> Rruga: </label>
                    <input
                        type="text"
                        name="rruga"
                        id="rruga"
                        value="<?=$result['street']?>"
                        readonly/>
                </div>
                <div class="text-pacienti">
                    <label> Komuna: </label>
                    <input
                        type="text"
                        name="komuna"
                        id="komuna"
                        value="<?=$result['city']?>"
                        readonly/>
                </div>
            </div>

            <div class="v2">

                <div class="text-pacienti">
                    <label> Numri i Postës: </label>
                    <input
                        type="text"
                        name="posta"
                        id="posta"
                        value="<?=$result['post_code']?>"
                        readonly/>
                </div>
            </div>

        </div>
        <!--Pyetja 1-->
        <div class="text-pacienti" id="dep">
            <label for="departamenti">Në cilin departament doni të caktoni terminin?</label>
            <select id="departamenti" name="department">
                <option value="alergologji">Zgjidhni nga opcionet</option>
                <?php
                foreach ($departments as $department){
                ?>
                <option value="<?= $department['dep_id']?>"><?= $department['dep_id']?>-  <?= $department['dep_name']?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <br><br>
        <div class="text-pacienti">
            <label> Shënoni arsyen për caktimin e terminit.</label>
            <input
                type="text"
                name="pat_desc"
                id="pyetja3"
            />
        </div>






        <div class="text-pacienti">
            <div class="data">
                <label> Data e terminit: </label>
                <input
                    type="date"
                    name="appointment_date"
                    id="data"
                /></div>
            <div class="ora">
                <label> Orari i terminit: </label>
                <input
                    type="time"
                    name="start_time"
                    id="ora"
                    min="07:00"
    max="22:00"
                /></div>
        </div>



        <div class="button">
            <button type="submit" >
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Dërgo Formularin
            </button>
        </div>
    </form>
</div>
<style>

body{
    margin:0;
    padding:0;
    font-family:sans-serif;
    background-image: url(assets/img/pic3.jpg);
    /*height: 100vh;*/
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
    background-position: center;
    color: #212529;
    font-size: 17px;
}
.appointment-box{
    position:relative;
    top: 50px;
    left:30%;
    width:900px;
    padding: 40px;

    background:white;
    box-sizing:border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,6);
    border-radius: 10px;
}

.appointment-box h1{
    margin:0 0 30px;
    padding:0;
    color: #212529;
    text-align:center;
}
.appointment-box h2{
    margin:0 0 30px;
    padding-bottom:40px;
    color: #212529;
    text-align:center;
}

.emri {
    width: 46%;
}
.mbiemri {
    width: 45%;
    margin-left: 72px;
}

.mbiemri label{
    margin-left: 55%;
}

.text-pacienti{
    position: relative;
    display: flex;
    align-items: center;
}


.text-pacienti input{
width: 100%;
margin-top: 25px;
padding: 10px 0;
color:black;
margin-bottom: 30px;
border:none;
border-bottom: 1px solid black;
outline: none;
background: transparent;
}

.text-pacienti label {
    position: absolute;
    top:  0;
    left: 0;
    padding: 10px 0;
    color:black;
    pointer-events: none;
}

.radio-pacienti{
    top: 5px;
    position: relative;
    color: #000;
}
.radio-pacienti label{
    position: absolute;
    top: -7px;
    left: 0;
    /* right: 41px; */
    margin-right: 20px;
    padding: 10px 0;
    color: black;
    pointer-events: none;
}
.radio-pacienti input{
    width: 2%;
    margin-left: 204px;
    /* margin-top: 25px; */
    padding: 0px 0;
    color: #fff;
    margin-bottom: 38px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}
.radio1-pacienti{
    top: 25px;
    /* bottom: 30px; */
    margin-bottom: 30px;
    position: relative;
}
.radio1-pacienti label{
    position: absolute;
    top: -7px;
    left: 0;
    /* right: 41px; */
    margin-right: 20px;
    padding: 10px 0;
    color: black;
    pointer-events: none;
}
.radio1-pacienti input{
    width: 5%;
    margin-left: 55px;
    /* margin-top: 25px; */
    padding: 0px 0;
    color: #fff;
    margin-bottom: 38px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}
.inputi{
    margin-left: 60%;
    color:#000;
}

#vendbanimi{
    top: 10px;
    position: relative;
    color: black;

}
.adresat{
    display: flex;
    padding: 10px;
    margin-top: 25px;
    margin-bottom: 5px;
}
.v1 {
    width: 45%;
}
.v2 {
    width: 45%;
    margin-left: 72px;
}

.text-departmenti{
    position: absolute;
    top:  0;
    left: 0;
    padding: 10px 0;
    color:#03e9f4;
    pointer-events: none;
}
.text-pacienti, #dep{
    justify-content: center;
}
#departamenti{
    margin-left: 423px;
    text-align: center;
    padding-left: 45px;
    padding-right: 45px;
    background-color: #0373f4;
    color: #fff;
}

select {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    background-color: #f5f5f5;
    font-size: 16px;
    color: #072444;
    appearance: none; /* Removes the default arrow icon */
    background-image: url("dropdown-arrow.png"); /* Add your own arrow icon */
    background-repeat: no-repeat;
    background-position: right center;
  }
  
  /* Hover effect */
  select:hover {
    background-color: #ebebeb;
    border-color: #aaa;
  }
  
  /* Focus effect */
  select:focus {
    outline: none;
    box-shadow: 0 0 5px #ddd;
    border-color: #aaa;
  }
  

.pacient{
    display: flex;
}
.pacient #p1, #p2{
    padding-left: 115px;
    padding-top: 20px;
    padding-bottom: 15px;
}

.data {
    width: 45%;
}
.ora {
    width: 45%;
    margin-left: 72px;
}

.ora label{
    margin-left: 55%;
}

.button a{
    background-color: #17a2b8;
}
.appointment-box .button a{
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    top: 40px;
    margin-bottom: 50px;
    margin-left: 34%;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 35px;
    letter-spacing: 4px;
}
.appointment-box .button a:hover{
    background: #0373f4;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #0373f4,
    0 0 25px #0373f4,
    0 0 50px #0373f4,
    0 0 100px #0373f4;
}


</style>