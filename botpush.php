<?php



require "vendor/autoload.php";

$access_token = 'ba9rGKeKDf4sG0FgHHBWso7qtLDQvLy//FXPKGq4m79N3sHVI8tljfRIKluHDG3hN+3bKovVFnAbbOBZMAM5pCgcqc7Wwo8/w0pGc6D0Zp/t/qqhxHW4veMR6UbPx44djxOw/QTIA+NBxYNCu9APvQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '0d91a210141e35008c77cf4d893e3e07';

$pushID = 'Ued233072d8a8620522f10d2464d2d77e ';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







