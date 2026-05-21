<?php
require_once 'convert.php';
require_once 'convert_back.php';
convert('data/example.csv', 'output/result.json');
convertBack('output/result.json', 'output/result.csv');
