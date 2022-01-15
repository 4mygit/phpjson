<?php
$errmsg = '';
if (isset($_POST['btnUpload']))
{
    $url = "http://localhost/jsonfileupld/api-file-upload.php"; // e.g. http://localhost/myuploader/upload.php // request URL
    $filename = $_FILES['sendimage']['name'];
    $filedata = $_FILES['sendimage']['tmp_name'];
    $filesize = $_FILES['sendimage']['size'];
    if ($filedata != '')
    {
        echo 'sdfdf';
        $headers = array("Content-Type:multipart/form-data"); // cURL headers for file uploading
        $postfields = array("filedata" => "@$filedata", "sendimage" => $filename);
        $ch = curl_init();
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_HEADER => true,
            CURLOPT_POST => 1,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $postfields,
            CURLOPT_INFILESIZE => $filesize,
            CURLOPT_RETURNTRANSFER => true
        ); // cURL options
        curl_setopt_array($ch, $options);
        curl_exec($ch);
        if(!curl_errno($ch))
        {
           // echo 'err';

            $info = curl_getinfo($ch);
            //var_dump($info['http_code']);
            echo $info['http_code'];
            if ($info['http_code'] === 200){
               echo $errmsg = "File uploaded successfully";
            }else{}
        }
        else
        {
            echo 'err';
            $errmsg = curl_error($ch);
        }
        curl_close($ch);
    }
    else
    {
        $errmsg = "Please select the file";
    }
}
?>