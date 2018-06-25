<?php



require "vendor/autoload.php";

$access_token = 'ojLPw4+TF05r8fI16GUtPhMF1W7onpwoJfODcOBIAyTPjM30qilDIJ8ymjZcfRalN+3bKovVFnAbbOBZMAM5pCgcqc7Wwo8/w0pGc6D0Zp8nsQq9c9K2nlFtw9FEsYv7sj3Ic7FzSqNj1YaL24x/RQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '0d91a210141e35008c77cf4d893e3e07';

$pushID = 'Ued233072d8a8620522f10d2464d2d77e ';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







