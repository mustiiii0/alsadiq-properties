<?php
$dir = __DIR__ . '/data/';
$properties = [];

foreach (glob($dir . '*.json') as $file) {
    $json = file_get_contents($file);
    $data = json_decode($json, true);
    if ($data) {
        $properties[] = $data;
    }
}

header('Content-Type: application/json');
echo json_encode($properties, JSON_UNESCAPED_UNICODE);
?>
