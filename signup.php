<?php 

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="icon" href="static/img/logo1.svg" size="32x32">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="static/font/font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
        <style type="text/css"> 
            @import "compass/css3";
            @font-face {
                font-family: 'Montserrat';
                src: url('montserrat-regular.woff2') format('woff2'),
                    url('montserrat-regular.woff') format('woff');
                font-weight: 400;
                }

                @font-face {
            font-family: 'Montserrat';
            src: url('montserrat-bold.woff2') format('woff2'),
                url('montserrat-bold.woff') format('woff');
            font-weight: 700;
            }
            *{
                box-sizing:border-box;
                -moz-box-sizing:border-box;
                -webkit-box-sizing:border-box;
                font-family:'Montserrat';
            }
            body{
                background: #fff;
                user-select:none;
                width: 100%;
                height: 100%;
            }
            a {
                color: #000;
                font-size:14px;
                font-family: 'Montserrat', sans-serif;
            }   
            .triangle {
                position: fixed;
                width: 50%;
                left:0;
                height: 100%;
                top:0;
                border: 0 solid transparent;
                z-index: 10;
                background: -webkit-linear-gradient(top, #00000000, #00000000);
            }
            .landpage {
                position: fixed;
                width: 50%;
                height: 100%;
                left:50%;
                top:0;
                border: 0 solid transparent;
                z-index: 10;
                background: -webkit-linear-gradient(top, #FFD41C, #FFD41C);
            }
            @media (max-width: 1300px){
                .login-form{
                    width: 350px;
                    height: fit-content;
                    padding: 30px 30px;
                    background: -webkit-linear-gradient(top, #ffffffef, #ffffffef);
                    border-radius: 15px;
                    margin:auto;
                    margin-top:20px;
                    position: absolute;
                    z-index: 20;
                    left: 0;right: 0;top: 0;bottom: 0;
                    transition: all 1s;
                    display: none;
                    
                }
                .login-form-2{
                    width: 350px;
                    height: fit-content;
                    padding: 30px 30px;
                    background: -webkit-linear-gradient(top, #ffffffef, #ffffffef);
                    border-radius: 15px;
                    margin:auto;
                    position: absolute;
                    z-index: 20;
                    left: 0;right: 0;top: 0;bottom: 0;
                    transition: all 1s;
                    display: none;
                    
                }
                .login-form-3{
                    width: 350px;
                        height: fit-content;
                        padding: 30px 30px;
                        background: -webkit-linear-gradient(top, #302c6cef, #005da5ef);
                        border-radius: 15px;
                        margin:auto;
                        position: fixed;
                        z-index: 20;
                        left: 0;right: 0;top: 0;bottom: 0;
                        transition: all 1s;
                        display: none;
                        
                    }
                .login-form-4{
                    width: 350px;
                        height: fit-content;
                        padding: 30px 30px;
                        background: -webkit-linear-gradient(top, #302c6cef, #005da5ef);
                        border-radius: 15px;
                        margin:auto;
                        position: fixed;
                        z-index: 20;
                        left: 0;right: 0;top: 0;bottom: 0;
                        transition: all 1s;
                        display: none;
                        
                    }
                h1{
                    font-size: clamp(0.2rem, 1.35rem, 7rem);
                    color: #000;
                    line-height: 1.2;
                    text-align: center;
                    font-family: 'Montserrat', sans-serif;
                    font-style: italic;
                    padding-top: 0px;
                    padding-bottom: 10px;
                    margin: 0;
                }
                h2{
                    font-size: clamp(0.2rem, 1.45rem, 7rem);
                    color: #000;
                    line-height: 1.2;
                    text-align: center;
                    padding-bottom: 20px;
                    font-weight: bold;
                    font-family: 'Montserrat', sans-serif;
                    margin: 0;
                }
                .link{
                        text-decoration:none;
                        color: #000;
                        float:right;
                        font-size:14px;
                        margin-bottom:15px;
                        cursor: pointer;
                        font-family: 'Montserrat', sans-serif;
                        &:hover{
                            text-decoration: underline;
                            color: #FFD41C;
                        }
                    }
                    .copy{
                padding-top: 15px;
                text-align: center;
                color:#000;
                font-size:14px;
                font-family: 'Montserrat', sans-serif;
            }
            }
            @media (min-width: 1300px){
                .login-form{
                    width: 400px;
                    height: fit-content;
                    padding: 30px 30px;
                    background: -webkit-linear-gradient(top, #ffffffef, #ffffffef);
                    border-radius: 5px;
                    margin:auto;
                    position: absolute;
                    z-index: 20;
                    left: 0;right: 0;top: 0;bottom: 0;
                    transition: all 1s;
                    display: none;
                    
                }
                .login-form-2{
                    width: 400px;
                    height: fit-content;
                    padding: 30px 30px;
                    background: -webkit-linear-gradient(top, #ffffffef, #ffffffef);
                    border-radius: 15px;
                    margin:auto;
                    position: absolute;
                    z-index: 20;
                    left: 0;right: 0;top: 0;bottom: 0;
                    transition: all 1s;
                    display: none;
                    
                }
                .login-form-3{
                    width: 400px;
                    height: fit-content;
                    padding: 30px 30px;
                    background: -webkit-linear-gradient(top, #302c6cef, #005da5ef);
                    border-radius: 15px;
                    margin:auto;
                    position: fixed;
                    z-index: 20;
                    left: 0;right: 0;top: 0;bottom: 0;
                    transition: all 1s;
                    display: none;
                    
                }
                .login-form-4{
                    width: 400px;
                    height: fit-content;
                    padding: 30px 30px;
                    background: -webkit-linear-gradient(top, #302c6cef, #005da5ef);
                    border-radius: 15px;
                    margin:auto;
                    position: fixed;
                    z-index: 20;
                    left: 0;right: 0;top: 0;bottom: 0;
                    transition: all 1s;
                    display: none;
                    
                }
                h1{
                    font-size: clamp(0.2rem, 1.6rem, 7rem);
                    color: #000;
                    line-height: 1.2;
                    text-align: center;
                    font-family: 'Montserrat', sans-serif;
                    padding-top: 20px;
                    padding-bottom: 20px;
                    font-style: italic;
                    margin: 0;
                }
                h2{
                    font-size: clamp(0.2rem, 1.8rem, 7rem);
                    color: #000;
                    line-height: 1.2;
                    text-align: center;
                    padding-bottom: 20px;
                    font-weight: bold;
                    font-family: 'Montserrat', sans-serif;
                    margin: 0;
                }
                .link{
                        text-decoration:none;
                        color: #000;
                        float:right;
                        font-size:14px;
                        margin-bottom:15px;
                        cursor: pointer;
                        font-family: 'Montserrat', sans-serif;
                        &:hover{
                            text-decoration: underline;
                            color: #FFD41C;
                        }
                    }
                    .copy{
                padding-top: 15px;
                text-align: center;
                color:#000;
                font-size:14px;
                font-family: 'Montserrat', sans-serif;
            }
            }
            @media (min-width: 1550px){
                .login-form{
                    width: 450px;
                    min-height:600px;
                    height: fit-content;
                    padding: 30px 30px;
                    background: -webkit-linear-gradient(top, #ffffffef, #ffffffef);
                    border-radius: 15px;
                    margin:auto;
                    position: absolute;
                    z-index: 20;
                    left: 0;right: 0;top: 0;bottom: 0;
                    transition: all 1s;
                    display: none;
                    
                }
                .login-form-2{
                    width: 450px;
                    min-height:600px;
                    height: fit-content;
                    padding: 30px 30px;
                    background: -webkit-linear-gradient(top, #ffffffef, #ffffffef);
                    border-radius: 15px;
                    margin:auto;
                    position: absolute;
                    z-index: 20;
                    left: 0;right: 0;top: 0;bottom: 0;
                    transition: all 1s;
                    display: none;
                    
                }
                .login-form-3{
                    width: 450px;
                    min-height:600px;
                    height: fit-content;
                    padding: 30px 30px;
                    background: -webkit-linear-gradient(top, #302c6cef, #005da5ef);
                    border-radius: 15px;
                    margin:auto;
                    position: fixed;
                    z-index: 20;
                    left: 0;right: 0;top: 0;bottom: 0;
                    transition: all 1s;
                    display: none;
                    
                }
                .login-form-4{
                    width: 450px;
                    min-height:600px;
                    height: fit-content;
                    padding: 30px 30px;
                    background: -webkit-linear-gradient(top, #302c6cef, #005da5ef);
                    border-radius: 15px;
                    margin:auto;
                    position: fixed;
                    z-index: 20;
                    left: 0;right: 0;top: 0;bottom: 0;
                    transition: all 1s;
                    display: none;
                    
                }
                h1{
                    font-size: clamp(0.2rem, 1.8rem, 7rem);
                    color: #000;
                    line-height: 1.2;
                    text-align: center;
                    font-family: 'Montserrat', sans-serif;
                    font-style: italic;
                    padding-top: 8%;
                    padding-bottom: 5%;
                    margin: 0;
                }
                h2{
                    font-size: clamp(0.2rem, 1.9rem, 7rem);
                    color: #000;
                    line-height: 1.2;
                    text-align: center;
                    padding-bottom: 20px;
                    font-weight: bold;
                    font-family: 'Montserrat', sans-serif;
                    margin: 0;
                    font-weight: 100;
                }
                .link{
                        text-decoration:none;
                        color: #000;
                        float:right;
                        font-size:16px;
                        margin-bottom:25px;
                        cursor: pointer;
                        font-family: 'Montserrat', sans-serif;
                        &:hover{
                            text-decoration: underline;
                            color: #FFD41C;
                        }
                    }
                    .copy{
                padding-top: 25px;
                text-align: center;
                color:#000;
                font-size:16px;
                font-family: 'Montserrat', sans-serif;
            }
            }
            .loginimg{
                width: 100%;
                margin: 0;
                margin-top: -30px;
            }
            .loginimgland{
                width: 80%;
                margin-left: 10%;
                margin-top: 25px;
                margin-bottom: 15px;
            }
            .form-group{
                position: relative;
                margin-bottom:15px;
            }
            .form-control{
                width:100%;
                height:50px;
                border:none;
                padding:5px 7px 5px 15px;
                background:#f5f5fa;
                color:#666;
                border:2px solid #ddd;
                border-radius: 4px;
                &:focus, &:focus + .fa{
                    border-color:#2b2b2b;
                    color:#2b2b2b;
                }
            }
            .versao{
                position: fixed;
                right: 5px;
                bottom: 5px;
                color: #f5f5faaf;
                font-size:16px;
                font-family: 'Montserrat', sans-serif;
                z-index: 200;
            }
            .form-control-pass{
                width:100%;
                height:50px;
                border:none;
                padding:5px 7px 5px 15px;
                background:#f5f5fa;
                color:#666;
                border:2px solid #ddd;
                border-radius: 4px;
                &:focus, &:focus + .fa{
                    border-color:#2b2b2b;
                    color:#2b2b2b;
                }
            }
            .form-group .fa{
                position: absolute;
                right:15px;
                top:17px;
                color:#999;
            }
            .log-status.wrong-entry {
                animation: wrong-log 0.3s;
            }
            .log-status.wrong-entry .form-control-pass, .wrong-entry .form-control-pass + .fa {
                border-color:red;
                color: #000;
            }
            .log-status-2.wrong-entry-2 {
                animation: wrong-log 0.3s;
            }
            .log-status-2.wrong-entry-2 .form-control, .wrong-entry .form-control + .fa {
                border-color: red;
                color: #000;
            }
            .log-status-2.wrong-entry-3 {
                animation: wrong-log 0.3s;
            }
            .log-status-2.wrong-entry-3 .form-control, .wrong-entry .form-control + .fa {
                border-color: #81B902;
                color: #81B902;
            }
            .log-btn{
                background:#FFD41C;
                display: inline-block;
                width:100%;
                font-size:16px;
                height:50px;
                color:#777777;
                text-decoration:none;
                border-radius:4px;
                border: none;
                &:hover{
                    text-decoration: none;
                    background:#0d0d0dcc;
                    color: #fff;
                }
            }
            .create{
                float: left;
                left: 0%;
                text-decoration:none;
                color:#f5f5fa;
                font-size:15px;
                cursor: pointer;
                font-family: 'Montserrat', sans-serif;
                &:hover{
                    text-decoration: underline;
                    color: #d4d4d4;
                }
            }
            .enviou{
                display:none;
                font-size:14px;
                color:#81B902;
                float:left;
                font-family: 'Montserrat', sans-serif;
            }
            .alert{
                display:none;
                font-size:14px;
                color:#f68484;
                float:left;
                font-family: 'Montserrat', sans-serif;
            }
            @include keyframes (wrong-log) {
                0%, 100% { left: 0px;}
                20% , 60%{left: 15px;}
                40% , 80%{left: -15px;}
            }
            .login{
                text-decoration:none;
                color:#000;
                float:right;
                font-size:14px;
                margin-bottom:15px;
                cursor: pointer;
                font-family: 'Montserrat', sans-serif;
                &:hover{
                    text-decoration: underline;
                    color:#FFD41C;
                }
            }
            .iconPass{
                cursor: pointer
            }
            .iconPass:hover{
                color: black;
            }
            .af1::after {
                content: attr(data-text);animation: fader 0.1s linear;
            }.af2::after {
                content: attr(data-text);animation: fader 0.2s linear;
            }.af3::after {
                content: attr(data-text);animation: fader 0.3s linear;
            }.af4::after {
                content: attr(data-text);animation: fader 0.4s linear;
            }.af5::after {
                content: attr(data-text);animation: fader 0.5s linear;
            }.af6::after {
                content: attr(data-text);animation: fader 0.6s linear;
            }.af7::after {
                content: attr(data-text);animation: fader 0.7s linear;
            }.af8::after {
                content: attr(data-text);animation: fader 0.8s linear;
            }.af9::after {
                content: attr(data-text);animation: fader 0.9s linear;
            }.af10::after {
                content: attr(data-text);animation: fader 1s linear;
            }.af11::after {
                content: attr(data-text);animation: fader 1.1s linear;
            }.af12::after {
                content: attr(data-text);animation: fader 1.2s linear;
            }.af13::after {
                content: attr(data-text);animation: fader 1.3s linear;
            }.af14::after {
                content: attr(data-text);animation: fader 1.4s linear;
            }.af15::after {
                content: attr(data-text);animation: fader 1.5s linear;
            }.af16::after {
                content: attr(data-text);animation: fader 1.6s linear;
            }.af17::after {
                content: attr(data-text);animation: fader 1.7s linear;
            }.af18::after {
                content: attr(data-text);animation: fader 1.8s linear;
            }.af19::after {
                content: attr(data-text);animation: fader 1.9s linear;
            }.af20::after {
                content: attr(data-text);animation: fader 2s linear;
            }.af21::after {
                content: attr(data-text);animation: fader 2.1s linear;
            }.af22::after {
                content: attr(data-text);animation: fader 2.2s linear;
            }.af23::after {
                content: attr(data-text);animation: fader 2.3s linear;
            }.af24::after {
                content: attr(data-text);animation: fader 2.4s linear;
            }.af25::after {
                content: attr(data-text);animation: fader 2.5s linear;
            }.af26::after {
                content: attr(data-text);animation: fader 2.6s linear;
            }.af27::after {
                content: attr(data-text);animation: fader 2.7s linear;
            }.af28::after {
                content: attr(data-text);animation: fader 2.8s linear;
            }.af29::after {
                content: attr(data-text);animation: fader 2.9s linear;
            }.af30::after {
                content: attr(data-text);animation: fader 3s linear;
            }.af31::after {
                content: attr(data-text);animation: fader 3.1s linear;
            }
            @keyframes fader {
                0% {
                    opacity: 0;
                }
                40% {
                    opacity: 0;
                }
                50% {
                    opacity: 1;
                }
                90% {
                    opacity: 1;
                }
                100% {
                    opacity: 1;
                }
            }
        </style>
    </head>

    <body>
        <div class="versao">Versão: 1.0.0</div>
        <div class="landpage">
            <img class='loginimgland' src="static/img/land1.svg" style='text-align: center'width="100%"/>
        </div>
        <div class="triangle">
            <div class="login-form">
                <img class='loginimg' src="static/img/Senior FIT bg.png" style='text-align: center'width="100%"/>
                <h1>
                <span class='af1' data-text="Q"></span><span class='af2' data-text="u"></span><span class='af3' data-text="a"></span><span class='af4' data-text="l"></span><span class='af5' data-text="i"></span><span class='af6' data-text="d"></span><span class='af7' data-text="a"></span><span class='af8' data-text="d"></span><span class='af9' data-text="e"></span><span class='af10' style='padding-left:10px;' data-text="e"></span><span class='af11' data-text="m"></span><span class='af12' style='padding-left:10px;'data-text="s"></span><span class='af13' data-text="o"></span><span class='af14' data-text="l"></span><span class='af15' data-text="u"></span><span class='af16' data-text="ç"></span><span class='af17' data-text="õ"></span><span class='af18' data-text="e"></span><span class='af19' data-text="s"></span><span class='af20' style='padding-left:10px;' data-text="d"></span><span class='af21' data-text="e"></span><span class='af22' style='padding-left:10px;' data-text="s"></span><span class='af23' data-text="a"></span><span class='af24' data-text="ú"></span><span class='af25' data-text="d"></span><span class='af26' data-text="e"></span>
                </h1>
                <h2>Escolha o seu cadastro!</h2>
                <a href="signup_doutor" class="link" style="padding: 10px;border-radius:5px;background:#FFD41C;color:white;font-weight: bold;margin-top:20px;font-size:17px;"role="button">Doutor</a>
                <a href="signup_paciente" class="link" style="float:left;padding: 10px;border-radius:5px;background:#FFD41C;color:white;font-weight: bold;margin-top:20px;font-size:17px;" role="button">Paciente</a>
            </div>
        </div>
    </body>
    
    <script>
        $(document).ready(function(){
            $('.login-form').css('display', 'block');
        });
    </script>

</html>