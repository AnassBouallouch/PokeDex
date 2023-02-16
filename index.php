<?php

require_once 'app/helper.php';
include 'app/api/api.php';

$ditto = [
    'name' => 'Dito',
    'types' => ['blob'],
    'picture' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/132.png'
];

$pokemons[] = $ditto;

include 'views/index.view.php';