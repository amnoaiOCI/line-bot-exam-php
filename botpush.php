<?php



require "vendor/autoload.php";

$access_token = 'ZWHqnexkkPRaWHDsvDneF7O1Nd/EsnAH0yECTARq/4GMQbejYMfgy81TxudEK2p44aeLHKa0VWiDGyxH4ujGIOrBpe8mkQkXuOAVC+mrgg+V/tpmQfkkQm/d5NisgJu9NtqK9L/TjD4cS3bH1GgHEQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'fc132766bdb387dc829891879af4bceb';

$pushID = 'U10ea595f889fee38fc06ec7fe8283a3b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







