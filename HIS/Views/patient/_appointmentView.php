<?php

$tableName = "patient";

$result = selectDataById($tableName, $_SESSION['ID']);
?>




<div class="appointment-box">
    <h1>Health Information System Kosova</h1>
    <h2>Formulari për termin të pacientit</h2>

    <form>

        <!--Emri dhe Mbiemri-->
        <div class="text-pacienti">
            <div class="emri">
                <label> Emri: </label>
                <input id=""
                       type="text"
                       name=""
                       required=""
                       value="<?=$result['pat_name']?>"
                /></div>
            <div class="mbiemri">
                <label> Mbiemri: </label>
                <input
                    type="text"
                    name=""
                    required=""
                    value="<?=$result['pat_surname']?>"
                /></div>
        </div>


        <!--Datëlindja-->
        <div class="text-pacienti">
            <label> Datëlindja: </label>
            <input
                type="date"
                name="datelindja"
                id="datelindja"
                value="<?=$result['pat_birthdate']?>"
            />
        </div>

        <!--Gjinia-->
        <div class="radio-pacienti">
            <label> Gjinia: </label>
            <input
                type="radio"
                name="gjinia"
                value="femer"
            />Femër
            <input
                type="radio"
                name="gjinia"
                value="mashkull"
            />Mashkull
        </div>

        <!--Numri i telefonit-->
        <div class="text-pacienti">
            <label> Numri i telefonit: </label>
            <input
                type="text"
                name="numri"
                id="numri"
                value="<?=$result['pat_mobile']?>"
            />
        </div>

        <!--Email-->
        <div class="text-pacienti">
            <label> Email: </label>
            <input
                type="email"
                name="email"
                id="email"
                value="<?=$result['pat_email']?>"
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
                    />
                </div>
                <div class="text-pacienti">
                    <label> Komuna: </label>
                    <input
                        type="text"
                        name="komuna"
                        id="komuna"
                    />
                </div>
            </div>

            <div class="v2">
                <div class="text-pacienti">
                    <label> Shteti: </label>
                    <input
                        type="text"
                        name="shteti"
                        id="shteti"
                    />
                </div>
                <div class="text-pacienti">
                    <label> Numri i Postës: </label>
                    <input
                        type="text"
                        name="posta"
                        id="posta"
                    />
                </div>
            </div>

        </div>
        <!--Pyetja 1-->
        <div class="text-pacienti" id="dep">
            <label for="departamenti">Në cilin departament doni të caktoni terminin?</label>
            <select id="departamenti" name="departamenti">
                <option value="alergologji">Zgjidhni nga opcionet</option>
                <option value="alergologji">Alergologji</option>
                <option value="anatomopatologji">Anatomopatologji</option>
                <option value="anesteziologji">Anesteziologji</option>
                <option value="check_up">Check Up</option>
                <option value="dermatologji">Dermatologji</option>
                <option value="qendrat_dialize">Qendrat e Dializës</option>
                <option value="endokrinologji">Endokrinologji</option>
                <option value="gastroenterologji">Gastroenterologji</option>
                <option value="hematologji">Hematologji</option>
                <option value="imazheri_avancuar">Imazheri e Avancuar</option>
                <option value="fekondimi_in_vitro">Fekondimi in Vitro (IVF)</option>
                <option value="kardiokirurgji">Kardiokirurgji</option>
                <option value="kardiologji">Kardiologji</option>
                <option value="kirurgji_pergjithshme">Kirurgji e Përgjithshme</option>
                <option value="kirurgji_plastike">Kirurgji Plastike</option>
                <option value="nefrologji">Nefrologji</option>
                <option value="neurokirurgji">Neurokirurgji</option>
                <option value="obstetrike_gjinekologji">Obstetrikë Gjinekologji</option>
                <option value="okulistike">Okulistikë</option>
                <option value="onkologji">Onkologji</option>
                <option value="ortopedi">Ortopedi</option>
                <option value="neonatologji_pediatri">Neonatologji-Pediatri</option>
                <option value="pneumologji">Pneumologji</option>
                <option value="proktologji">Proktologji</option>
                <option value="reumatologji">Reumatologji</option>
                <option value="urologji">Urologji</option>
                <option value="urgjence_24_ore">Urgjencë 24 Orë</option>
                <option value="orl">ORL</option>
            </select>
        </div>
        <br><br>
        <div class="text-pacienti">
            <label> Shënoni arsyen për caktimin e terminit.</label>
            <input
                type="text"
                name="pyetja3"
                id="pyetja3"
            />
        </div>


        <div class="radio1-pacienti">
            <label> A keni caktuar termin më herët në të njëjtin departament? </label>
            <div class="inputi">
                <input
                    type="radio"
                    name="pyetja2"
                    value="po"
                />Po
                <input
                    type="radio"
                    name="pyetja2"
                    value="jo"
                />Jo
            </div>
        </div>

        <div class="text-pacienti">
            <label> Nëse jeni përgjigjur po, shkruani emrin e doktorit tuaj përgjegjës në atë departament.</label>
            <input
                type="text"
                name="pyetja3"
                id="pyetja3"
            />
        </div>

        <div class="text-pacienti">
            <div class="data">
                <label> Data e terminit: </label>
                <input
                    type="date"
                    name="data"
                    id="data"
                /></div>
            <div class="ora">
                <label> Orari i terminit: </label>
                <input
                    type="time"
                    name="ora"
                    id="ora"
                /></div>
        </div>



        <div class="button">
            <a href='verification.html'>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Dërgo Formularin
            </a>
    </form>
</div>
<style>
    html{
        height: 290%;
    }
    body{
        margin:0;
        padding:0;
        font-family:sans-serif;
        background: linear-gradient(#3760ac,#072444);
        color: #fff;
        font-size: 17px;
    }

    .appointment-box{
        position:absolute;
        top:145%;
        left:51%;
        width:900px;
        padding: 40px;
        transform: translate(-50% ,-50%);
        background:rgba(62,147,161,0.5);
        box-sizing:border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,6);
        border-radius: 10px;
    }

    .appointment-box h1{
        margin:0 0 30px;
        padding:0;
        color: #03e9f4;
        text-align:center;
    }
    .appointment-box h2{
        margin:0 0 30px;
        padding-bottom:40px;
        color: #fff;
        text-align:center;
    }

    .emri {
        width: 45%;
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
        color:#fff;
        margin-bottom: 30px;
        border:none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .text-pacienti label {
        position: absolute;
        top:  0;
        left: 0;
        padding: 10px 0;
        color:#03e9f4;
        pointer-events: none;
    }

    .radio-pacienti{
        top: 5px;
        position: relative;
    }
    .radio-pacienti label{
        position: absolute;
        top: -7px;
        left: 0;
        /* right: 41px; */
        margin-right: 20px;
        padding: 10px 0;
        color: #03e9f4;
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
        color: #03e9f4;
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
    }

    #vendbanimi{
        top: 10px;
        position: relative;
        color: #03e9f4;

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
        background-color: rgba(62,147,161,0.5);
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


    .appointment-box .button a{
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        top: 40px;
        margin-bottom: 50px;
        margin-left: 32%;
        color: #03e9f4;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 35px;
        letter-spacing: 4px;
    }
    .appointment-box .button a:hover{
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
        0 0 25px #03e9f4,
        0 0 50px #03e9f4,
        0 0 100px #03e9f4;
    }
    .appointment-box a span{
        position: absolute;
        display: block;
    }
    .appointment-box a span:nth-child(1){
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
    .appointment-box a span:nth-child(2){
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
    .appointment-box a span:nth-child(3){
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
    .appointment-box a span:nth-child(4){
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