<?php
$dua    = require __DIR__ .'/Lists.php';
$basePath = __DIR__ .'/json';
if (!is_dir($basePath)) {
    mkdir($basePath, 0755, true);
}
file_put_contents(
    "{$basePath}/lists.json",
    json_encode($dua, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT)
);
file_put_contents(
    "{$basePath}/lists.min.json",
    json_encode($dua, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)
);
