<?php

//header('Content-Type: application/json');  // <-- header declaration

//curl command to execute api using php
$cmd ="curl  -X POST https://energyforecastcg.azurewebsites.net/get_forecast?horizon=30 -H \"Content-Type=multipart/form-data\" -F \"file=@\"C:/xampp/htdocs/json/payload.csv\";type='application/vnd.ms-excel";
exec($cmd,$jsonString);

  $someObject = json_decode($jsonString[0],true);
 $a=[];
 foreach($someObject["Aggregate"] as $key => $val){
      $key .' = '. $val.',';
     array_push($a,$val);

 }
 $someObject = json_encode($jsonString,true);

 $total = array_sum($a);

$rand = rand(10000,99999);
include_once('conn.php');
 $sql = "INSERT INTO `alert` (`alert`) VALUES ( '{$total}')";

mysqli_query($con,$sql);


 ?>