<?php

if(!empty($_GET['id'])) {

    $id = $_GET['id'];
    // API URL to send data
    $url = 'https://648d4c152de8d0ea11e7b746.mockapi.io/langs/'.$id;

    // curl initiate
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // SET Method as a DELETE
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute curl and assign returned data
    $response = curl_exec($ch);

    // Close curl
    curl_close($ch);


}

?>