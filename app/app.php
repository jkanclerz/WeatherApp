<?php

include_once(__DIR__.'/../vendor/autoload.php');

use Buzz\Browser;
use Jkanclerz\Component\Weather\Api\OpenWeatherClient;
$browser = new Browser();
$apiClient = new OpenWeatherClient($browser);

$resp = json_decode($apiClient->callApi('Cracow'), true);
var_dump($resp['main']['temp']);
die;