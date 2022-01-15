<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');

$data = json_decode(file_get_contents("php://input"));


echo json_encode(
    array('id' => $data->id,
           'mssg' =>  $data->mssg
    )
);