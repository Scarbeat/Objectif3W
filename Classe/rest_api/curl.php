<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/posts');
//curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);





curl_exec($ch);


curl_getinfo($ch);


var_dump($ch);
print_r($ch);
curl_close($ch);
