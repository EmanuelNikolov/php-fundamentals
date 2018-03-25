<?php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    $class .= '.php';
    require_once $class;
});

$borderApp = new BorderApp();
$borderApp->start();