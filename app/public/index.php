<?php
require __DIR__ . '/../switchRouter.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');
$router = new SwitchRouter();
$router->route($uri);
