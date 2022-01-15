<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');

include_once('conn.php');

$data = json_decode(file_get_contents("php://input"));

$car = $data->car;

$sql = "insert into car (carno) values('{$car}')";
$result = mysqli_query($con,$sql);

$lastid = mysqli_insert_id($con);
echo $lastid;

echo json_encode(
    array('id' => $lastid,
           'mssg' => $car
    )
);