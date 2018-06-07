<?php


$access_token = 'FJVHsIVISrTjsYR87I5h3PySe9Nk3p8PklGovZcaEard3VxglFqCNj1VKSPaOr0aY6A5gkZRENuCjVgeBhRMuWDfQLy8Cx/1NikOnZMPOg8C9qp1hmJy/A0ajfKhf+cRb+KAsH09um2womP/YTt6VwdB04t89/1O/w1cDnyilFU=';

$userId = 'U8f73d0ddd420f2af51c19895cafdfd42';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

