<?php



require "vendor/autoload.php";

$access_token = 'M+hfTMqp7McHzM38rEyKysTDGZ6oazoJ2hs/mxy9GiyX+bEEDhmYabyPdp7LNN7T+kIdYt2ezupPR6K8X3Jh5Ppmo+9a3ePfeR52YsraYcL2IvFTKiXLf549mmxOyCiM2Cs3WMAWxNnj/Txc+Ed9RgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b47115d6374191e166c37263d8cd5e34';

$pushID = 'U3d399448545c6895da987735557fd21e';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('sdfghjk');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







