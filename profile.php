<?php


$access_token = 'cE9EyQTm2btWnk40ETQ0HxnUYa2VwDAG7iUYVjy4lwJVA/Qxn7aRuXh8eQ5UeYRT+kIdYt2ezupPR6K8X3Jh5Ppmo+9a3ePfeR52YsraYcIWd8XYdo/iKUa+YmmKr/PusjIipBGqj6GzUYw2sh+eBgdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

