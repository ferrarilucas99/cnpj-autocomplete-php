<?php

$cnpj = $_REQUEST['cnpj'];

$url = "https://receitaws.com.br/v1/cnpj/".$cnpj;

// $url = 'https://receitaws.com.br/v1/cnpj/47955494000121';

$result = file_get_contents($url);

$response = [
    'success' => true,
    'data' => $result,
];

// echo $result;
echo json_encode($response);