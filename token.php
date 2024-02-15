<?php
session_start();

function generateRandomToken($length = 64) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $token = '';
    for ($i = 0; $i < $length; $i++) {
        $token .= $characters[random_int(0, strlen($characters) - 1)];
    }

    // Set the generated token in the session
    $_SESSION['csrf_token'] = $token;

    // Set appropriate headers for response
    header('Content-Type: application/json');

    // Return the token as JSON
    echo json_encode(['token' => $token]);
}
