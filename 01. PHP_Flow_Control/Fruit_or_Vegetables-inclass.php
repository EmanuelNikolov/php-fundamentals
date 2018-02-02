<?php
$word = $argv[1];

switch ($word) {
    case 'banana':
    case 'apple':
    case 'kiwi':
    case 'cherry':
    case 'lemon':
    case 'grapes':
    case 'peach':
        echo 'Fruit' . "\n";
        break;
    case 'tomato':
    case 'cucumber':
    case 'pepper':
    case 'onion':
    case 'garlic':
    case 'parsley':
        echo 'Vegetable' . "\n";
        break;
    default:
        echo "Unknown" . "\n";
}
