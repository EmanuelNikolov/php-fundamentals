<?php

namespace Driver;


class Database
{

    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct(
      $dbHost,
      $dbName,
      $dbUser,
      $dbPass
    ) {
        $dsn = 'mysql:host=' . $dbHost . ";dbname=" . $dbName . ";charset=utf8";
        $this->pdo = new \PDO($dsn, $dbUser, $dbPass);
    }

    public function getPDO(): \PDO
    {
        return $this->pdo;
    }
}