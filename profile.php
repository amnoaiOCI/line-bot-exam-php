<?php


$access_token = 'ZWHqnexkkPRaWHDsvDneF7O1Nd/EsnAH0yECTARq/4GMQbejYMfgy81TxudEK2p44aeLHKa0VWiDGyxH4ujGIOrBpe8mkQkXuOAVC+mrgg+V/tpmQfkkQm/d5NisgJu9NtqK9L/TjD4cS3bH1GgHEQdB04t89/1O/w1cDnyilFU=';

$userId = 'U10ea595f889fee38fc06ec7fe8283a3b';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

