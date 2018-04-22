<?php
session_start();

$db = new PDO("mysql:host=localhost;port=3306;dbname=forum;charset=utf8", "root");

//spl_autoload_register(function($class) {
//    require $class . '.php';
//});
//
//$app = new \CoreForum\Application();