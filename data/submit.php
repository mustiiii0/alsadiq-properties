<?php
$dir = __DIR__ . '/data/';
if (!is_dir($dir)) {
    mkdir($dir, 0755, true);
}

$data = $_POST;
$data['timestamp'] = time();

// Skapa unikt filnamn
$filename = $dir . 'property_' . time() . '.json';

// Spara datan som JSON
file_put_contents($filename, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

// Bekräftelse
header('Location: thankyou.html'); // Du kan byta till bekräftelsesida om du vill
exit;
?>
