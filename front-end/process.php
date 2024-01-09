<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userMessage = $_POST["user-input"];

    // Use curl to make a POST request to your Flask API
    $apiUrl = "http://localhost:5000/bot";
    $postData = json_encode(["message" => $userMessage]);

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpCode == 200) {
        echo json_decode($response, true)["message"];
    } else {
        echo "Error: Unable to communicate with the chatbot API.";
    }

    curl_close($ch);
}

?>
