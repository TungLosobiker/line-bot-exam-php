<?php
$access_token = 'M+hfTMqp7McHzM38rEyKysTDGZ6oazoJ2hs/mxy9GiyX+bEEDhmYabyPdp7LNN7T+kIdYt2ezupPR6K8X3Jh5Ppmo+9a3ePfeR52YsraYcL2IvFTKiXLf549mmxOyCiM2Cs3WMAWxNnj/Txc+Ed9RgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
