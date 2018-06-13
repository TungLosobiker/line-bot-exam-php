<?php
$access_token = '/Xo13Hv+K4I0wB4MrJ2WJk50C5iK0qrhmNRezfEU9CF94wvI+fGy5xfK5dXrUKN4+kIdYt2ezupPR6K8X3Jh5Ppmo+9a3ePfeR52YsraYcJHMszAOdm7JhY6blFBXnn+tn0nFhOf5UlGX/Q0trutRAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
