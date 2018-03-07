<?php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    $class .= ".php";
    require_once $class;
});

$autoCatalog = new Avtoku6ta();
echo $autoCatalog;