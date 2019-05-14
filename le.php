<?php

$file = fopen(__DIR__ . '/data.csv', 'r');

$result = [];

while (($data = fgetcsv($file, null, ';')) !== false) {
    $result[] = $data;
}

var_dump($result);
