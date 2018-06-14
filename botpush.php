<?php



require "vendor/autoload.php";

$access_token = 'cE9EyQTm2btWnk40ETQ0HxnUYa2VwDAG7iUYVjy4lwJVA/Qxn7aRuXh8eQ5UeYRT+kIdYt2ezupPR6K8X3Jh5Ppmo+9a3ePfeR52YsraYcIWd8XYdo/iKUa+YmmKr/PusjIipBGqj6GzUYw2sh+eBgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b47115d6374191e166c37263d8cd5e34';

$pushID = 'U0ac46dd528b9af0c99a61650352de67f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Test System Alert');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







