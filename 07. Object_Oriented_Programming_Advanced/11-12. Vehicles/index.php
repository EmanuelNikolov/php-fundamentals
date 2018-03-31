<?php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    require_once "{$class}.php";
});

$vehicleApp = new \VehicleApp\App();

$vehicleApp->start();