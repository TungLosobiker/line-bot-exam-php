<?php
$access_token = '+lF6cWUpmr1UiBQSoc3xX8nKV4mMj093J9JF/pQGtpd8XmvJqcD+uyZXs/3B0J8T+kIdYt2ezupPR6K8X3Jh5Ppmo+9a3ePfeR52YsraYcLQsy3dwtTF8+Dq5m23mqzSwvCzsebwXAuXnLWmBCtBugdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
