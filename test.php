<?php
require __DIR__ . '/vendor/autoload.php';

// do not use in production, tests only
//require __DIR__ . '/src/Popcatwrapper.php';

use Givinghawk\Popcatwrapper\Main;

$popcat = new Givinghawk\Popcatwrapper\Main();

print_r($popcat->color('ff0000'));