<?php



require "vendor/autoload.php";

$access_token = '';

$channelSecret = 'b47115d6374191e166c37263d8cd5e34';

$pushID = 'U09ca9891ce026843549a511cdf5dec89';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Test System Alert2');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







