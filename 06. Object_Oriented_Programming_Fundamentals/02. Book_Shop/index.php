<?php
declare(strict_types=1);

require_once "Book.php";

$tokens = array();

for ($i = 0; $i < 3; ++$i) {
    $tokens[] = trim(fgets(STDIN));
    if ($i == 2) {
        $tokens[2] = (int)$tokens[2];
    }
}

$type = trim(fgets(STDIN));

try {
    $book = $type == "GOLD"
        ? new GoldenEditionBook(...$tokens)
        : new Book(...$tokens);
    echo $book;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}