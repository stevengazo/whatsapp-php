<?php

session_start();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// 🔥 MUY IMPORTANTE
$uri = str_replace(BASE_URL, '', $uri);

$uri = rtrim($uri, '/') ?: '/';

$routes = [

    '/' => ['DashboardController', 'index'],
    '/login' => ['AuthController', 'login'],
    '/logout' => ['AuthController', 'logout'],
    '/dashboard' => ['DashboardController', 'index'],

    '/chats' => ['ChatController', 'index'],
    '/kanban' => ['KanbanController', 'index'],

    // Settings
    '/settings' => ['SettingsController', 'index'],
    '/settings/crm' => ['SettingsController', 'crm'],
    '/settings/users' => ['UserController', 'index'],          // Lista de usuarios
    '/settings/users/create' => ['UserController', 'create'], // Crear usuario
    '/settings/channels' => ['SettingsController', 'channels'],

];

if (array_key_exists($uri, $routes)) {

    [$controller, $method] = $routes[$uri];

    require __DIR__ . "/controllers/$controller.php";

    $instance = new $controller();
    $instance->$method();

} else {
    http_response_code(404);
    echo "404 - Página no encontrada";
}
