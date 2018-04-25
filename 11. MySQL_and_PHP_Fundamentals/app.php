<?php
declare(strict_types=1);
session_start();

spl_autoload_register(function($class) {
    require $class . '.php';
});

$db = new \Driver\Database(
  \Config\DBConfig::DB_HOST,
  \Config\DBConfig::DB_NAME,
  \Config\DBConfig::DB_USER,
  \Config\DBConfig::DB_PASS
);

$userService = new UserService($db->getPDO());

$templateService = new \ViewEngine\TemplateService();