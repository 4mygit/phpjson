<?php
//This is a script to read data from maximo
//Again update through VS code

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "9080",
  CURLOPT_URL => "http://20.88.56.235:9080/maxrest/rest/os/MXASSET/?ASSETNUM=BREAKER1003",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "maxauth: bWF4YWRtaW46TWF4aW1vQDEyMw=="
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>