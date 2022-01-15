<?php
header('Content-Type: application/json');  // <-- header declaration
//move_uploaded_file($_FILES['apifile']['tmp_name'],'payload.csv');

$cmd ="curl  -X POST https://energyforecastcg.azurewebsites.net/get_forecast?horizon=30 -H \"Content-Type=multipart/form-data\" -F \"file=@\"payload.csv\";type='application/vnd.ms-excel";
exec($cmd,$jsonString);
//var_dump($jsonString);
//echo $result[0];
//$unparsed_json = file_get_contents("api.php?action=getThreads&hash=123fajwersa&node_id=4&order_by=post_date&order=desc&limit=1&grab_content&content_limit=1");


//echo json_decode($result[0]);    


//echo json_encode($result[0]);

 //$jsonString = '{"timestamp":{"1028":"2015-11-06T00:00:00","1029":"2015-11-07T00:00:00","1030":"2015-11-08T00:00:00","1031":"2015-11-09T00:00:00","1032":"2015-11-10T00:00:00","1033":"2015-11-11T00:00:00","1034":"2015-11-12T00:00:00","1035":"2015-11-13T00:00:00","1036":"2015-11-14T00:00:00","1037":"2015-11-15T00:00:00","1038":"2015-11-16T00:00:00","1039":"2015-11-17T00:00:00","1040":"2015-11-18T00:00:00","1041":"2015-11-19T00:00:00","1042":"2015-11-20T00:00:00","1043":"2015-11-21T00:00:00","1044":"2015-11-22T00:00:00","1045":"2015-11-23T00:00:00","1046":"2015-11-24T00:00:00","1047":"2015-11-25T00:00:00","1048":"2015-11-26T00:00:00","1049":"2015-11-27T00:00:00","1050":"2015-11-28T00:00:00","1051":"2015-11-29T00:00:00","1052":"2015-11-30T00:00:00","1053":"2015-12-01T00:00:00","1054":"2015-12-02T00:00:00","1055":"2015-12-03T00:00:00","1056":"2015-12-04T00:00:00","1057":"2015-12-05T00:00:00"},"Aggregate":{"1028":7.713827767537657,"1029":8.189606718963145,"1030":8.76292919716471,"1031":8.675205484900268,"1032":8.523004465653402,"1033":8.619508945180796,"1034":8.69000639276795,"1035":7.88320214583721,"1036":8.358981097263236,"1037":8.932303575464012,"1038":8.844579863201215,"1039":8.692378843953323,"1040":8.788883323481004,"1041":8.859380771067237,"1042":8.052576524136764,"1043":8.528355475562524,"1044":9.101677953764334,"1045":9.013954241501283,"1046":8.861753222253238,"1047":8.958257701780772,"1048":9.028755149368918,"1049":8.221950902436618,"1050":8.697729853861958,"1051":9.27105233206363,"1052":9.18332861979959,"1053":20.452936796675935,"1054":20.940042137698043,"1055":19.047732785472444,"1056":26.902354481610036,"1057":14.912498313315542}}';
//echo stripslashes(json_encode($result[0], JSON_UNESCAPED_SLASHES));
//echo is_string($jsonString);
//echo $jsonObjectVal = stripslashes(json_encode($jsonString, JSON_UNESCAPED_SLASHES));
//echo is_string($jsonObjectVal);

  $someObject = json_decode($jsonString[0],true);
 //var_dump($someObject["timestamp"]);
 $a=[];
 foreach($someObject["Aggregate"] as $key => $val){
      $key .' = '. $val.',';
     array_push($a,$val);

 }
 $someObject = json_encode($jsonString,true);

 //var_dump($someObject);
//echo strval($someObject->timestamp); // Access Object data

//var_dump($a);
echo array_sum($a);
//echo array_sum($someObject["Aggregate"]);
?>