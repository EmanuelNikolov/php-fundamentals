<?php
session_start();

spl_autoload_register(function($class) {
    require $class . '.php';
});

$db = new PDO("mysql:host=localhost;port=3306;dbname=forum;charset=utf8", "root");

//$app = new \CoreForum\Application();