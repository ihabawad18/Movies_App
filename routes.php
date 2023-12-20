<?php
require_once './models/UserModel.php';
require_once 'controllers/UserController.php';
$request_uri = $_SERVER['REQUEST_URI'];
$uri_segments = explode('/', trim($request_uri, '/'));

// Define routes
$route = $uri_segments[1] ?? '';

switch ($route) {
    case '':
        // base route
        require_once 'lala.php';
        // $controller = new HomeController();
        // $controller->index();
        break;

    case 'movies':
    // // Movies route
    // require_once 'controllers/MovieController.php';
    // $controller = new MovieController();
    // $controller->index();
    // break;

    case 'register':
        // Register route

        $UserModel = new UserModel($conn);
        $controller = new UserController($UserModel);
        $controller->showRegisterForm();
        break;

    case 'login':

        // Login route
        $UserModel = new UserModel($conn);
        $controller = new UserController($UserModel);
        $controller->showLoginForm();
        break;
    case 'change-password':
        $UserModel = new UserModel($conn);
        $controller = new UserController($UserModel);
        $controller->showProfile();
        break;

    case 'logout':
        session_start();
        session_unset();
        session_destroy();
        header('Location:/Movies_App/login');

    case 'admin':


    default:
    // // Handle other routes
    // require_once 'controllers/ErrorController.php';
    // $controller = new ErrorController();
    // $controller->notFound();
    // break;
}
