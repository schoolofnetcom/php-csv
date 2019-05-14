<?php

$file = fopen(__DIR__ . '/data.csv', 'w');

// DAQUI
$data = [
    ['aaa', 'bbb', 'ccc'],
    [111, 222, 333, 444],
    ['ddd', 'eee']
];
// ATÉ AQUI: NÃO IMPORTA DA ONDE VEM ESTES DADOS, CONTANTO QUE ESTEJAM NESTE FORMATO

foreach ($data as $row) {
    fputcsv($file, $row, ';');
}

fclose($file);
