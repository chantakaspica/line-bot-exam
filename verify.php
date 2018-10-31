<?php
$access_token ='lUJwxLsZ3U6hRTo6VZTgAaW0lX0dISgz3GZ7JPWeP2YUJ0PyQdmxIrg4AI40xUEcXYluS7Bc+PC6EI+iLuObiPtu8KgzYuhL8u6wxd5XOyZSyNxhLJKs2+wfbujq0NqQDnXiUNGxqDkqjiYgxF8NWgdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
