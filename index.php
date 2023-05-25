<?php

// Load the route definitions
require_once 'config/route.php';
require_once 'config/database.php';

// Get the requested URL
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Route the request to the appropriate controller and action
if (isset($routes[$url])) {
    $controller = $routes[$url]['controller'];
    $action = $routes[$url]['action'];
    require_once 'controllers/' . $controller . '.php';
    $controllerInstance = new $controller();
    $controllerInstance->$action();
} else {
    // Handle 404 - Not Found
    echo "404 - Page Not Found";
}
