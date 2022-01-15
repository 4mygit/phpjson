<?php


$cmd ="curl  -X POST https://energyforecastcg.azurewebsites.net/get_forecast?horizon=30 -H \"Content-Type=multipart/form-data\" -F \"file=@\"file.csv\";type='application/vnd.ms-excel";
exec($cmd,$result);
var_dump($result);
?>