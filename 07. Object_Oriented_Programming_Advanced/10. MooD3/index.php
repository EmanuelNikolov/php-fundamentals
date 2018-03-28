<?php
declare(strict_types=1);

use MooDGame\Game;

spl_autoload_register(function ($class) {
    require_once "{$class}.php";
});

$game = new Game();
$game->start();