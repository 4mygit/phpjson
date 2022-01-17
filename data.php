<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('conn.php');
$sql = "select * from car";
$result = mysqli_query($con,$sql);





$tableData =  array();
$tableData['val'] = array();

while($rows =  mysqli_fetch_assoc($result)){
   // print($rows['carno']);
   extract($rows);
   $item = array(
       'id' => $id,
       'carno' => $carno
   );

   array_push($tableData['val'], $item);


}


echo json_encode($tableData);
?>