<?php
// SERVER A - UPLOAD FILE VIA CURL POST
// (A) SETTINGS
$url = "https://energyforecastcg.azurewebsites.net/get_forecast?horizon=30"; // Where to upload file to
$file ="file.csv"; // File to upload
$upname = "file.csv"; // File name to be uploaded as

// (B) NEW CURL FILE
$cf = new CURLFile($file, mime_content_type($file), $upname);

// (C) CURL INIT
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
  // ATTACH FILE UPLOAD
  "file" => $cf,
  // OPTIONAL - APPEND MORE POST DATA
  "msg" => "VALUE"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// (D) CURL RUN
// (D1) GO!
$result = curl_exec($ch);

// (D2) CURL ERROR
if (curl_errno($ch)) {
  echo "CURL ERROR - " . curl_error($ch);
}

// (D3) CURL OK - DO YOUR "POST UPLOAD" HERE
else {
  // $info = curl_getinfo($ch);
  // print_r($info);
  echo $result;
}

// (D4) DONE
curl_close($ch);