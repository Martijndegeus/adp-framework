<?php

use Application\System\Core;

require_once __DIR__ . '/../../vendor/autoload.php';

spl_autoload_register(function ($className) {
    echo '../' . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php<br>';
    include '../' . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
});

Core::run();