<?php
// Sanitize and validate input data
$business = isset($_POST['business']) ? htmlspecialchars($_POST['business']) : null;
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;
$whatsapp = isset($_POST['whatsapp']) ? htmlspecialchars($_POST['whatsapp']) : null;
$country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : null;

// Validate input data
if (!$business || !$name || !$whatsapp || !$country) {
    displayError("Please fill out all the fields.");
}

// Load existing data from the JSON file
$jsonFilePath = 'user_data.json';
$existingData = file_exists($jsonFilePath) ? json_decode(file_get_contents($jsonFilePath), true) : [];

// Check if phone number already exists
$isDuplicate = false;

foreach ($existingData as $existingUser) {
    if ($existingUser['whatsapp'] === $whatsapp) {
        $isDuplicate = true;
        break;
    }
}

// Display Bootstrap alert if duplicate content is detected
if ($isDuplicate) {
    displayDuplicateAlertAndRedirect();
}

// Generate a unique identifier for the user
$userId = uniqid();

// Create an associative array with user data including the generated ID
$userData = array(
    'id' => $userId,
    'business' => $business,
    'name' => $name,
    'whatsapp' => $whatsapp,
    'country' => $country
);

// Add the new user to the existing data
$existingData[] = $userData;

// Encode the array as JSON
$jsonData = json_encode($existingData, JSON_PRETTY_PRINT);

// Save the updated JSON data to the file
if (file_put_contents($jsonFilePath, $jsonData)) {
    // Send data to Zapier webhook
    sendDataToZapier($userData);

    // Registration successful, redirect to index.html with a success message
    header('Location: index.html?success=1');
    exit();
} else {
    displayError("Error saving user data to file.");
}

// Function to send data to Zapier webhook
function sendDataToZapier($userData)
{
    // Set up cURL to send a POST request to Zapier webhook URL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://hooks.zapier.com/hooks/catch/16554718/3gicqa6/'); // Replace with your Zapier webhook URL
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($userData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL and close
    $result = curl_exec($ch);
    curl_close($ch);

    // You can optionally check $result for any response from Zapier
}

// Function to display Bootstrap alert for errors
function displayError($errorMessage)
{
    // Redirect to index.html with an error message
    header('Location: index.html?error=' . urlencode($errorMessage));
    exit();
}

// Function to display Bootstrap alert for duplicate content and redirect
function displayDuplicateAlertAndRedirect()
{
    // Redirect to index.html with a duplicate content message
    header('Location: index.html?duplicate=1');
    exit();
}
