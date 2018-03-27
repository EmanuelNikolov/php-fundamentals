<?php
declare(strict_types=1);

use CollectionApp\App;

spl_autoload_register(function ($class) {
    require_once "{$class}.php";
});

$app = new App();
$app->start();
