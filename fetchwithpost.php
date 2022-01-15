<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');

$data = json_decode(file_get_contents("php://input"));


echo json_encode(
    array('id' => 1,
           'AC' =>  0,
           'Water Heater' =>  200,
           'Washing Machine' =>  25,
           'Dishwasher' =>  30,
           'Fridge' =>  20,
           'TV' =>  15,
           'EV' =>  200
    )
);