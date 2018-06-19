<?php



require "vendor/autoload.php";

$access_token = '+lF6cWUpmr1UiBQSoc3xX8nKV4mMj093J9JF/pQGtpd8XmvJqcD+uyZXs/3B0J8T+kIdYt2ezupPR6K8X3Jh5Ppmo+9a3ePfeR52YsraYcLQsy3dwtTF8+Dq5m23mqzSwvCzsebwXAuXnLWmBCtBugdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b47115d6374191e166c37263d8cd5e34';

$pushID = 'U09ca9891ce026843549a511cdf5dec89';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Hello 19/06/2561');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







