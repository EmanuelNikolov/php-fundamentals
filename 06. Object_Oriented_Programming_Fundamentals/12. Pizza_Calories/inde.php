<?php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    $class .= '.php';
    require_once $class;
});

$pizzaMaker3000 = new \PizzaMaker();
$pizzaMaker3000->start();