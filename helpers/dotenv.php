<?php

function parse_env($filepath) {
    $env = [];
    if (!file_exists($filepath)) {
        echo $filepath . ' not found!';
        return $env;
    }
    $lines = file($filepath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Skip comments and lines without an equal sign
        if (strpos(trim($line), '=') === false || strpos(trim($line), '#') === 0) {
            continue;
        }
        list($key, $value) = explode('=', $line, 2);
        $env[$key] = $value;
    }
    return $env;
}

$env = parse_env($_SERVER['DOCUMENT_ROOT'].'/mnu/.env');