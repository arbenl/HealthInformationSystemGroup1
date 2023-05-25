<?php

$tableName = "patients";

$result = selectDataById($tableName, $_SESSION['ID']);
$address=$result['city'] . $result['street'] .$result['post_code']
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

    html{
        height: 280%;
    }
    body{
        margin:0;
        padding:0;
        font-family:sans-serif;
        background: linear-gradient(#3760ac,#072444);
        color: #fff;
        font-size: 17px;
    }

    .user-box{
        position:absolute;
        top:135%;
        left:51%;
        width:725px;
        height: 250%;
        padding: 40px;
        transform: translate(-50% ,-50%);
        background:rgba(62,147,161,0.5);
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
