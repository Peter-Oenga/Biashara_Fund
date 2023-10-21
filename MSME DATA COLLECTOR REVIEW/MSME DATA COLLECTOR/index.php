<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$weatherApiKey = $_ENV['WEATHER_API_KEY'];
$dbUsername =  $_ENV['DB_USERNAME'];
$dbPassword =  $_ENV['DB_PASSWORD'];

echo "Weather API Key: $weatherApiKey\n";
echo "DB Username: $dbUsername\n";
echo "DB Password: $dbPassword\n";
