<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)
    ->withServiceAccount('ph-sensor-web-app-964ad-firebase-adminsdk-6qo24-211df39793.json')
    ->withDatabaseUri('https://ph-sensor-web-app-964ad-default-rtdb.firebaseio.com/');

    $database = $factory->createDatabase();
    $auth = $factory->createAuth();
?>