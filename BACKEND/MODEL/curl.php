<?php

/*
/*Este archivo permite enviar por cURL un mensaje al servidor2 :D
*/
class cu{


  function curl($nombre,$mensaje){


        $url = "192.168.1.6/CHAT/FRONTEND/VIEW/index2.php";
        $postData = array("nombre" => $nombre, "mensaje" => $mensaje);

        /*Convierte el array en el formato adecuado para cURL*/
        /**
        $elements = array();
        foreach ($postData as $name=>$value) {
        	$elements[] = "{$name}=".urlencode($value);
        }
        **/

        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);
        curl_setopt($handler, CURLOPT_POST,true);
        //curl_setopt($handler, CURLOPT_POSTFIELDS, $elements);
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postData);
        $response = curl_exec ($handler);
        curl_close($handler);
  }
}
