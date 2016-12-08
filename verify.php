<?php
$access_token = 'qI63wfinb91y5oyWBhCBGBEKW/3hVssLVV/zVOhdNqJzOpStNS2CgbxJl6jK67j5+6ljLlfDvd+4mQweQeBg/SG3UOuCfQBxvmclxDQm3yzikDSqOBxKFysXQ2S/iLPABxuPN863yRKdAtQM/rNUaAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;