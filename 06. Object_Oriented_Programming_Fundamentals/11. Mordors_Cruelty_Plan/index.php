<?php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    $class .= '.php';
    require_once $class;
});

$wizAnalyzer = new WizardAnalyser();
$wizAnalyzer->start();