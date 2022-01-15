<?php
// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

$service_url = "http://localhost/json/data.php";

$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
//execute the session
$curl_response = curl_exec($curl);
//finish off the session
curl_close($curl);
$curl_jason = json_decode($curl_response, true);
//print_r($curl_jason);

foreach($curl_jason as $datas){
    //var_dump($data);

    foreach($datas as $data){
    //var_dump($data['id']);
    print($data['carno']);
}
}

?>