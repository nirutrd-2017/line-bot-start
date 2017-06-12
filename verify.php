<?php
$access_token = '4sZlweFBpGo5KwSAp07G/aBIIK0JeV70h0ZH0Khp+GKFywY7ei/RmWpe/J1+/bDpRIPUR+28ENFgmwmxaFgZonAeoRw/nYXcCmQd7/9ikocqbqEaDISSo/puOBEjqoAccFInLAwPuSN3/qfHdz+SygdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>