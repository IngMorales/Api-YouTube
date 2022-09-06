<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.youtube.com/elmoralesyt');
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept-Language: es-es,en"));
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   
   
   
    $result = curl_exec($ch);
   
    if(!$result)
    {
        echo "Error: " . curl_error($ch) . " Code: " . curl_errno($ch) . "<br/>";
    }
   
    curl_close($ch);
   
    //busqueda por patrones para obtener el número de suscriptores
    preg_match_all("(<span class=\"yt-subscription-button-subscriber-count-branded-horizontal subscribed yt-uix-tooltip\" title=\"(.*)\")siU", $result, $matches1);
   
    $suscriptores = $matches1[1][0];
   
   
    //echo "Suscriptores: " . $suscriptores;
 
?>