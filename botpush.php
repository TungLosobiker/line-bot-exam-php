<?php



require "vendor/autoload.php";

$access_token = '/7mBT4UU4o4gEmJn6A6R9RHp4Mj/a4b3JPTEcIzuH8/0Mhop3RdhTlJxnUnfEwXL+kIdYt2ezupPR6K8X3Jh5Ppmo+9a3ePfeR52YsraYcIqIDnvqXFgTCkg9XyiM9U+mRiu2G3vPiqNyOXz0aTO9AdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b47115d6374191e166c37263d8cd5e34';

$pushID = 'Ufeb8f5cedff6f40d36f509073534b721';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Test System Alert');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







