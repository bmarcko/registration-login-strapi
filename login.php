<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();

$identifier = $_POST['identifier'];
$password = $_POST['password'];

$result = $client->login($identifier,$password);

var_dump($result->getStatusCode());
var_dump($result->getReasonPhrase());
var_dump($result->getProtocolVersion());
var_dump($result->getBody()->getContents());