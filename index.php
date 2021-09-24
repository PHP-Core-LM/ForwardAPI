<?php
header("Access-Control-Allow-Origin: *");


if (isset($_GET['url'])) {
    $urlRequest = urldecode($_GET['url']);
    $result = sendRequest($urlRequest);
    if ($result == false) {
        echo json_encode(array("status" => false));
    }
    else {
        echo $result;
    }
}

function sendRequest($url, $data = array()){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);
    curl_close($ch);
    
    return $output;
}
