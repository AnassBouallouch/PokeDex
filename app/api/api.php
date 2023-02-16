<?php

include_once 'app/helper.php';
require 'vendor/autoload.php';

$apiUrl = 'https://pokeapi.co/api/v2/';

$guzzle = new GuzzleHttp\Client();
$response = $guzzle->get($apiUrl.'pokemon/blastoise');
$response2 = $guzzle->get($apiUrl.'pokemon/rattata');



$pokemon = json_decode($response->getBody()->getContents(), true);
$pokemon2 = json_decode($response2->getBody()->getContents(), true);


$pokemons = [];
$pokemons[] = [
  'name' => $pokemon['name'],
  'types' => array_map(fn($ability) => $ability['ability']['name'], $pokemon['abilities']),
  'picture' => $pokemon['sprites']['front_default']
];

$pokemons[] = [
    'name' => $pokemon2['name'],
    'types' => array_map(fn($ability) => $ability['ability']['name'], $pokemon2['abilities']),
    'picture' => $pokemon2['sprites']['front_default']
];

return $pokemons;