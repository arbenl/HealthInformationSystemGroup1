<div class="verification-box">
    <h1>Health Information System Kosova</h1>
    <h2>Formulari është dërguar me sukses</h2>

    <p>Në email ju është dërguar verifikimi i terminit.</p>

    <p>Në qoftëse doni të anuloni apo të ricaktoni terminin, na shënoni në email <a href="mailto:hospitalmenagment@universitetiaab.com">hospitalmenagment@universitetiaab.com</a> ose na telefononi në <a>+383 49 000 000</a></p>

    <br>
    <p>Dëshironi të shikoni të dhënat tuaja personale, klikoni butonin.</p>

    <div class="button">
        <a href="patientView.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            user profile
        </a>
    </div>
</div>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: linear-gradient(#3760ac, #072444);
    }
    .page-footer{
        top: 90px;
    }
    .verification-box {
        position: relative;
        left: 25%;
        width: 800px;
        padding: 40px;
        top: 40px;
        background: rgba(62, 147, 161, 0.5);
        bottom: 40px;
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 6);
        border-radius: 10px;

    }

    .verification-box h1 {
        margin: 0 0 30px;
        padding: 0;
        color: #03e9f4;
        text-align: center;
    }

    .verification-box h2 {
        margin: 0 0 30px;
        padding-bottom: 40px;
        color: #fff;
        text-align: center;
    }

    p {
        color: #03e9f4;
        padding-top: 10px;
    }

    a {
        color: #fff;
        text-decoration: none;
    }


    .verification-box .button a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        top: 20px;
        margin-bottom: 40px;
        margin-left: 67%;
        color: #03e9f4;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 30px;
        letter-spacing: 4px;
    }

    .verification-box .button a:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 100px #03e9f4;
    }

    .verification-box a span {
        position: absolute;
        display: block;
    }

    .verification-box a span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100px;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    .verification-box a span:nth-child(2) {
        top: -100px;
        right: 0;
        width: 2px;
        height: 100px;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }

    @keyframes btn-anim2 {
        0% {
            top: -100%;
        }

        50%,
        100% {
            top: 100%;
        }
    }

    .verification-box a span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100px;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }

    @keyframes btn-anim3 {
        0% {
            right: -100%;
        }

        50%,
        100% {
            right: 100%;
        }
    }

    .verification-box a span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100px;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }

    @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }

        50%,
        100% {
            bottom: 100%;
        }
    }
</style>