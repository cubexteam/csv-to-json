<?php
function convertBack($input, $output) {
    $json = json_decode(file_get_contents($input), true);
    $csv = fopen($output, 'w');
    fputcsv($csv, array_keys($json[0]));

    foreach ($json as $row) {
        fputcsv($csv, $row);
    }
    fclose($csv);
    echo "Готов.  Сохранено в $output\n";
}
