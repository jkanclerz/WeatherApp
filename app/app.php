<?php


include_once(__DIR__.'/../vendor/autoload.php');

use Buzz\Browser;
use Jkanclerz\Component\Weather\Api\OpenWeatherClient;
use Symfony\Component\Stopwatch\Stopwatch;
use Symfony\Component\Filesystem\Filesystem;

$cacheFile = __DIR__.'/cache/weatcher.cache';
$browser = new Browser();
$fs = new Filesystem();
$stopWatch = new Stopwatch();
$apiClient = new OpenWeatherClient($browser, $fs, $cacheFile, $stopWatch);

$resp = json_decode($apiClient->callApi('Cracow'), true);
var_dump($resp['main']['temp']);

$event = $stopWatch->getEvent('callApi');
var_dump($event->getDuration());
die;