<?php
function convert($input, $output) {
    $csv = array_map('str_getcsv', file($input));
    $headers = array_shift($csv);
    $json = [];

    foreach ($csv as $row) {
        $json[] = array_combine($headers, $row);
    }
    file_put_contents($output, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo " Готово. Сохранено в $output\n";
}
