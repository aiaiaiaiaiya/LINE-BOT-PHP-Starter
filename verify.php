<?php
$access_token = 'jJZ2ndnr2/QZiHURRtOOwfD3sNp+Jy1CcC4Vd615UNmF5oeO7e4ogBWtuS1giCm8dp8ogjy7WocMKvVhAX2RPHXTuGrZ/jR+eF3gXutVZnVqLxFGz/9RRrEBoxsNkWIA8IvaSytm/w2ux4qcr5NRCwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;