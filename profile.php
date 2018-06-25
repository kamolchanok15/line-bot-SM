<?php


$access_token = 'ojLPw4+TF05r8fI16GUtPhMF1W7onpwoJfODcOBIAyTPjM30qilDIJ8ymjZcfRalN+3bKovVFnAbbOBZMAM5pCgcqc7Wwo8/w0pGc6D0Zp8nsQq9c9K2nlFtw9FEsYv7sj3Ic7FzSqNj1YaL24x/RQdB04t89/1O/w1cDnyilFU=';

$userId = 'Ued233072d8a8620522f10d2464d2d77e';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

