<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://smocdemo.atlassian.net/rest/api/3/issue/10203",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Basic cm9taWxhLmJoYWdhdEBjYXBnZW1pbmkuY29tOkwybVJiWmlkeW9HTUVxTUxQR1R6M0MzNQ==",
    "cache-control: no-cache",
    "postman-token: e1d04c38-1cd5-295d-0e5b-13a81e530435"
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