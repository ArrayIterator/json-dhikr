<?php
$dua    = require __DIR__ .'/Doa.php';
$basePath = __DIR__ .'/json';
$json = [
    'doa' => __DIR__ .'/Doa.php',
    'manasik-haji' => __DIR__ .'/Manasik-Haji.php',
];

if (!is_dir($basePath)) {
    mkdir($basePath, 0755, true);
}
foreach ($json as $name => $item) {
    /** @noinspection PhpIncludeInspection */
    $item = require $item;
    file_put_contents(
        "{$basePath}/{$name}.json",
        json_encode($item, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
    );
    file_put_contents(
        "{$basePath}/{$name}.min.json",
        json_encode($item, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
    );
    unset($item);
}
