<?php



require "vendor/autoload.php";

$access_token = '/Xo13Hv+K4I0wB4MrJ2WJk50C5iK0qrhmNRezfEU9CF94wvI+fGy5xfK5dXrUKN4+kIdYt2ezupPR6K8X3Jh5Ppmo+9a3ePfeR52YsraYcJHMszAOdm7JhY6blFBXnn+tn0nFhOf5UlGX/Q0trutRAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b47115d6374191e166c37263d8cd5e34';

$pushID = 'U013b7d2cfed11bf252ca2f6646c88a0f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







