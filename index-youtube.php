<?php

use App\Youtube\Application;

require_once './vendor/autoload.php';

$app = new Application();

try {
    $app->init();
} catch (Exception $exception) {
    echo "Opsss! {$exception->getMessage()}"; exit;
}
