<?php
//HTTP Request Place
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://localhost/curl/hello.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS,'secret=noodles');//key = value
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$var = curl_exec($ch);
echo strtoupper($var);