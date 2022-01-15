<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] === 'PUT') { 
$data = json_decode(file_get_contents("php://input"));
http_response_code(200);

echo json_encode(
    array('response' =>  $data->username)
  );
}

/*
echo json_encode(
    array('message' =>  $data->name)
  );
*/
