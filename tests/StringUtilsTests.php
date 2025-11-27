<?php

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use Webmozart\Assert\Assert;

Assert::same(\StringUtils\capitalize('hello'), 'Hello');
Assert::same(\StringUtils\capitalize(''), '');

echo 'Все тесты пройдены!';
