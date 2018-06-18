<?php



require "vendor/autoload.php";

$access_token = 'NAfQftbenFFyPjkG9pEkRvTsPEVmni64q5eleiLmdDuQ+d3IQ2BHkaqtm45Wyc2W+kIdYt2ezupPR6K8X3Jh5Ppmo+9a3ePfeR52YsraYcJyvVxdiIt2S3854mYZiI94NzUdcVGWTmk1kMtNEaasYAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b47115d6374191e166c37263d8cd5e34';

$pushID = 'U0ac46dd528b9af0c99a61650352de67f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Hello 18/06/2561 No.2');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







