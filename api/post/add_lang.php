<?php

if (!empty($_POST)) {

    // User data to send using HTTP POST method in curl
    $new_lang = $_POST;

    // Data should be passed as json format
    $data_json = json_encode($new_lang);

    // API URL to send data
    $url = 'https://648d4c152de8d0ea11e7b746.mockapi.io/langs';

    // curl initiate
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // SET Method as a POST
    curl_setopt($ch, CURLOPT_POST, 1);

    // Pass user data in POST command
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute curl and assign returned data
    $response = curl_exec($ch);

    // Close curl
    curl_close($ch);

    // Redirect to home page
    header('Location: ./../..');
}

?>