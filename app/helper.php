<?php

function dd(string|array|object $data) {
    echo '<pre>';
        var_dump($data);
    echo '</pre>';

    exit;
}

function dump(string|array|object $data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}