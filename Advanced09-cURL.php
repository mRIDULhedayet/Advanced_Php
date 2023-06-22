<?php
$cl = curl_init();

curl_setopt($cl, CURLOPT_URL, 'https://www.w3schools.com/');
curl_setopt($cl,CURLOPT_HEADER,1);
curl_setopt($cl,CURLOPT_PORT,0);
curl_setopt($cl,CURLOPT_TIMEOUT,0);

curl_exec($cl);
curl_close($cl);
 ?>
