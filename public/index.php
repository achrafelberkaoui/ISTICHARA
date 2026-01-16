<?php
    // require_once __DIR__ . '/../autoload/autoload.php';

    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../router/Router.php';
    require_once __DIR__ . '/../router/Routes.php';
    Router::dispatch();

