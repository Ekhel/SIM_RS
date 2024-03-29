<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bpjs extends CI_Model {
  function get_bpjs()
  {
    $uri="http://dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v2/peserta/noka/" //url web service bpjs
  	$consID 	= "1234"; //customer ID anda
  	$secretKey 	= "1233211"; //secretKey anda

  	$pcareUname = "usernamepcare"; //username pcare
  	$pcarePWD 	= "passwordpcare"; //password pcare anda
  	$kdAplikasi	= "111"; //kode aplikasi

  	$stamp		= time();
  	$data 		= $consID.'&'.$stamp;

  	$signature = hash_hmac('sha256', $data, $secretKey, true);
  	$encodedSignature = base64_encode($signature);
  	$encodedAuthorization = base64_encode($pcareUname.':'.$pcarePWD.':'.$kdAplikasi);

    $headers = array(
                "Accept: application/json",
                "X-cons-id:".$consID,
                "X-timestamp: ".$stamp,
                "X-signature: ".$encodedSignature,
                "X-authorization: Basic " .$encodedAuthorization
            );


    $ch = curl_init($uri);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
  }
}
