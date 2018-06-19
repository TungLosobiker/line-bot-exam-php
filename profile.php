<?php


$access_token = '+lF6cWUpmr1UiBQSoc3xX8nKV4mMj093J9JF/pQGtpd8XmvJqcD+uyZXs/3B0J8T+kIdYt2ezupPR6K8X3Jh5Ppmo+9a3ePfeR52YsraYcLQsy3dwtTF8+Dq5m23mqzSwvCzsebwXAuXnLWmBCtBugdB04t89/1O/w1cDnyilFU=';

$userId = 'U013b7d2cfed11bf252ca2f6646c88a0f';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

