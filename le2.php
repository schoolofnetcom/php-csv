<?php

$data = file_get_contents(__DIR__ . '/data.csv');

$data = explode("\n", $data);

$result = [];

foreach ($data as $row) {
    if (!$row) continue;
    $result[] = str_getcsv($row, ';');
}


var_dump($result);