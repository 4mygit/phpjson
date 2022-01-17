<?php
header('Content-type: application/json');


//sleep(rand(3,10));
$json = '{"status": "Success", "result": ["052.jpg", "053.jpg", "054.jpg", "055.jpg", "056.jpg", "057.jpg", "058.jpg", "059.jpg", "60.jpg"]}';

sleep(rand(2,12));

	echo $json; // This will print the data in JSON format

?>