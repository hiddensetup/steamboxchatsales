<?php
header('Content-Type: application/json');

function generateRandomPercentage($min, $max) {
    return number_format(mt_rand($min, $max) / 10, 2);
}

function getCurrentDateTime() {
    $dateTime = new DateTime("now", new DateTimeZone("America/Argentina/Buenos_Aires")); // Adjust timezone accordingly
    return $dateTime->format('M d Y H:i:s') . ' GMT-3';
}

$usaStatus = generateRandomPercentage(989, 1000) . '% Funcionando';
$brasilStatus = generateRandomPercentage(979, 990) . '% Funcionando';
$generalStatus = generateRandomPercentage(998, 1000) . '% Funcionando';

echo json_encode([
    'usa' => $usaStatus,
    'brasil' => $brasilStatus,
    'general' => $generalStatus,
    'serverTime' => getCurrentDateTime(),
]);
?>
