<?php
require "vendor/autoload.php";
$access_token = 'lUJwxLsZ3U6hRTo6VZTgAaW0lX0dISgz3GZ7JPWeP2YUJ0PyQdmxIrg4AI40xUEcXYluS7Bc+PC6EI+iLuObiPtu8KgzYuhL8u6wxd5XOyZSyNxhLJKs2+wfbujq0NqQDnXiUNGxqDkqjiYgxF8NWgdB04t89/1O/w1cDnyilFU=';
$channelSecret = '6f8b99c3823fd96931e892ec3a6d94ab';
$idPush = 'U978353b757fb68d634d3f0911735b3b8'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
