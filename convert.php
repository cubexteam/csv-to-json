<?php
function convert($input, $output) {
    $csv = array_map('str_getcsv', file($input, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
    $headers = array_shift($csv);
    $json = [];

    foreach ($csv as $row) {
        if (count($row) === count($headers)) {
            $json[] = array_combine($headers, $row);
        }
    }
    file_put_contents($output, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo " Готово. Сохранено в $output\n";
}
