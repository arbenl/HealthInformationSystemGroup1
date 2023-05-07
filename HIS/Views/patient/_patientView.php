<?php

$tableName = "patient";

$result = selectDataById($tableName, $_SESSION['ID']);
?>


<?php
echo $result["pat_userid"]; echo $result['pat_name']

?>


<style>
    html{
        height:100%;
    }
    body{
        margin:0;
        padding:0;
        font-family:sans-serif;
    }
    .add-box{
        position:absolute;
        top:50%;
        left:50%;
        width:500px;
        padding: 60px;
        transform: translate(-50% ,-50%);
        background: linear-gradient(#3760ac,#072444);
        box-sizing:border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,6);
        border-radius: 10px;
    }
    .add-box h2{
        margin:0 0 30px;
        padding:0;
        color: #fff;
        text-align:center;
    }
    .add-box .registration-box{
        position: relative;
    }
    .add-box .registration-box input{
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color:#fff;
        margin-bottom: 30px;
        border:none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }
    .add-box .registration-box label{
        position: absolute;
        top:  0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color:#fff;
        pointer-events: none;
        transition: .5s;
    }
    .add-box .registration-box input:focus ~ label,
    .add-box .registration-box input:valid ~ label{
        top: -20px;
        left: 0;
        color:#03e9f4;
        font-size: 12px;
    }
    .add-box .button a{
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color:#03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 30px;
        letter-spacing: 4px;
    }
    .add-box .button a:hover{
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
        0 0 25px #03e9f4,
        0 0 50px #03e9f4,
        0 0 100px #03e9f4;
    }
    .add-box a span{
        position: absolute;
        display: block;
    }
    .add-box a span:nth-child(1){
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
    .add-box a span:nth-child(2){
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
    .add-box a span:nth-child(3){
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
    .add-box a span:nth-child(4){
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
    p{
        float:right;
    }
    .text{
        margin-top: 20px;
        text-align: center;
        color: #fff;
        font-size: 14px;
        padding: 4px;
    }
    .link{
        margin-top: 20px;
        text-align: right;
        font-size: 16px;
        padding: 4px;
    }
    .link a{
        font-family: sans-serif;
        color:#fff;
        cursor:pointer;
        text-decoration: underline;
    }
    .link a:hover{
        color:#03e9f4;
    }

</style>
