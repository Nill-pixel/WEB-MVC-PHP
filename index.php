<?php

require_once __DIR__ . '/core/Core.php';
require_once __DIR__ . '/routes/routes.php';

spl_autoload_register(function ($file) {
    if (file_exists(__DIR__ . "/utils/$file.php")) {
        require_once __DIR__ . "/utils/$file.php";
    } else if (file_exists(__DIR__ . "/models/$file.php")) {
        require_once __DIR__ . "/models/$file.php";
    } elseif (file_exists(__DIR__ . "/models/dto/task/$file.php")) {
        require_once __DIR__ . "/models/dto/task/$file.php";
    } else if (file_exists(__DIR__ . "/models/dto/user/$file.php")) {
        require_once __DIR__ . "/models/dto/user/$file.php";
    } else if (file_exists(__DIR__ . "/models/connect/$file.php")) {
        require_once __DIR__ . "/models/connect/$file.php";
    } elseif (file_exists(__DIR__ . "/models/dto/$file.php")) {
        require_once __DIR__ . "/models/dto/$file.php";
    }
});

$core = new Core();
$core->run($routes);