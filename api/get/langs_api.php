<?php

function get_langs()
{

    // API URL
    $api_url = 'https://648d4c152de8d0ea11e7b746.mockapi.io/langs';

    // Read JSON file
    $json_data = file_get_contents($api_url);

    // Decode JSON data into PHP array
    $response_data = json_decode($json_data, true);

    $data = array();
    foreach ($response_data as $key => $response) {

        $data[] = $response;
    }

    return $data;

}

function get_one_lang($id = "")
{

    if(!empty($_GET['id'])) {

        $id = $_GET['id'];
    }

    // API URL
    $api_url = 'https://648d4c152de8d0ea11e7b746.mockapi.io/langs/'.$id;

    // Read JSON file
    $json_data = file_get_contents($api_url);

    echo json_encode($json_data);
}

if(!empty($_GET['id'])) {

    get_one_lang();
}

?>