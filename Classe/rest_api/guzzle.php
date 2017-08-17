<?php
require 'c:/users/webuser/vendor/autoload.php';


use GuzzleHttp\Client;
use GuzzleHttp\EntityBody;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

$client = new Client(['verify' => false]);


//ajouter du code au json


// $response = $client->put('http://localhost:5984/user/1b54b55fb9b557d94760de0b620028d8',
// ['json' => [
//     "_id" => "1b54b55fb9b557d94760de0b620028d8",
//     "_rev" => "3-5cd9d4c1d0a0545e2fa707dadc3fb642",
//     "titre" => "Marcelator",
//     "contenu" => "zbleh !!!",
//     [
//         "name" => "Tangela",
//         "type" => ["Grass"],
//         "trainer" => "Erika",
//         "gender" => "f",
//         "owned" => "1999-07-27"
//     ],
//     [
//         "name" => "Wobbuffet",
//         "type" => ["Psychic"],
//         "trainer" => "Elesa",
//         "gender" => "m",
//         "owned" => "2014-09-09"
//     ],
//     [
//         "name" => "Gogoat",
//         "type" => ["Grass"],
//         "trainer" => "Ramos",
//         "gender" => "m",
//         "owned" => "2015-10-17"
//     ]
// ]]);


//recup tout les docs

// $response = $client->get('http://localhost:5984/user/_all_docs',['query' => ['include_docs' => 'true']]);
// echo "<br>";
// echo "<br>";
// $json = $response->getBody()->getContents();
// $data = json_decode($json,true);
//
// var_dump($data);
// $data = $response -> getBody() -> getContents();
// $data = json_decode($data, true);

// var_dump($data);
