<?php
header("Access-Control-Allow-Origin: *");

$uri = $_SERVER["REQUEST_URI"];
$url = "https://thongtindoanhnghiep.co/api/" . $uri;
echo $url;
// $result = sendRequest($url);
// if ($result == false) {
//     echo json_encode(array("status" => false));
// }
// else {
//     echo $result;
// }
// if (isset($_POST['idProvince'])) {
//     $idProvince = $_POST['idProvince'];
//     $url = ""https://thongtindoanhnghiep.co/api/city/" . $idProvince . "/district";
//     $result = sendRequest($url);
//     if ($result == false) {
//         echo json_encode(array("status" => false));
//     }
//     else {
//         echo $result;
//     }
// }

// if (isset($_POST['idDistrict'])) {
//     $idDistrict = $_POST['idDistrict'];
//     $url = "https://thongtindoanhnghiep.co/api/district/" . $idDistrict . "/ward";
//     $result = sendRequest($url);
//     if ($result == false) {
//         echo json_encode(array("status" => false));
//     }
//     else {
//         echo $result;
//     }
// }

function sendRequest($url, $data = array()){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);
    curl_close($ch);
    
    return $output;
}
