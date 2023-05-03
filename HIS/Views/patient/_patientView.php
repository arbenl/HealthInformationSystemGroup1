<?php

$tableName = "patient";

$result = selectDataById($tableName, $_SESSION['ID']);

if ($result == 0){
    ?>

    <div class="add-box">
        <h2>Regjistrohuni</h2>
        <form method="post">
            <div class="registration-box">
                <input type="text" name="fullname" required="">
                <label>Full Name:</label>
            </div>
            <div class="registration-box">

                <select class="form-control" id="my-select" name="gender">
                    <option value="option1">Select Gender</option>
                    <option value="option1">Male</option>
                    <option value="option2">Female</option>
                </select>

            </div>
            <div class="registration-box">
                <input type="text" name="age" required="">
                <label>Age</label>
            </div>
            <div class="registration-box">
                <input type="email" name="email" required="">
                <label>e-Mail</label>
            </div>
            <div class="registration-box">
                <input type="tel" name="phone" required="" value="+383">
                <label>Phone</label>
            </div>
            <div class="registration-box">
                <input type="text" name="city" required="" >
                <label>City</label>
            </div>
            <div class="registration-box">
                <input type="text" name="address" required="" >
                <label>Address</label>
            </div>
            <div class="button">
                <input type="submit"  name="submit" value="Submit">
                <a href="#">

                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Krijo
                </a>
            </div>
            <p>
                <span class="text">Keni krijuar nje llogari tashme?</span>
                <span class="link"><a href="Login.html">Kyçu!</a></span>
            </p>
        </form>
    </div>

<?php
}else{
    ?>
<h1><?php echo $result["pat_userid"]; echo $result['pat_name']?></h1>
<?php
}
?>
