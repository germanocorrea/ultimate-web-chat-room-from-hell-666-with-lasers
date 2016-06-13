<?php

$arquivos = ['chat', 'usuarios'];
if (!file_exists('data/')) {
    mkdir('./data/', 0777);
}
foreach ($arquivos as $arquivo) {
    if (!file_exists('data/' . $arquivo . '.json')) {
        $file = fopen('./data/' . $arquivo . '.json', 'w');
        fclose($file);
    }
}