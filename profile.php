<?php


$access_token = 'ba9rGKeKDf4sG0FgHHBWso7qtLDQvLy//FXPKGq4m79N3sHVI8tljfRIKluHDG3hN+3bKovVFnAbbOBZMAM5pCgcqc7Wwo8/w0pGc6D0Zp/t/qqhxHW4veMR6UbPx44djxOw/QTIA+NBxYNCu9APvQdB04t89/1O/w1cDnyilFU=';

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

