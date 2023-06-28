<?php

if(!empty($_GET['id'])) {

    // User data to send using HTTP POST method in curl
    $update_lang = $_POST;

    // Data should be passed as json format
    $data_json = json_encode($update_lang);


    $id = $_GET['id'];

    // API URL to send data
    $url = 'https://648d4c152de8d0ea11e7b746.mockapi.io/langs/'.$id;

    // curl initiate
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // SET Method as a PUT
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

    // Pass user data in PUT command
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