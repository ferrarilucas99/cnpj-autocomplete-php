<?php

$cnpj = $_REQUEST['cnpj'];

$url = "https://receitaws.com.br/v1/cnpj/".$cnpj;

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    // CURLOPT_URL => "https://receitaws.com.br/v1/cnpj/47955494000121",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
      "Accept: application/json"
    ],
]);

$ret = curl_exec($curl);
$error = curl_error($curl);

curl_close($curl);

$success = isset($error) && !empty($error) ? false : true;
$data = isset($error) && !empty($error) ? $error : $ret;
$response = [
    'success' => $success,
    'data' => $data,
];

echo json_encode($response);
