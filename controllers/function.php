<?php
require_once '../koneksi.php';
function apiKey($url, $response=null) {
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'X-API-Key: '.getenv('apiKey'),
    'Content-Type: application/json'
  ]);
  $response = curl_exec($curl);
  curl_close($curl);
  // echo $response . PHP_EOL;  
  return $response;
}
