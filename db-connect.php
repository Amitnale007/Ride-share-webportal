<?php
// db-connect.php

// phpinfo();

require __DIR__.'/vendor/autoload.php'; // Include the Composer autoloader

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccountFilePath = __DIR__.'/keys/carpool.json';

$factory = (new Factory)
    ->withServiceAccount($serviceAccountFilePath);

$firebase = $factory->createDatabase();