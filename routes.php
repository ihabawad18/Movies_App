<?php
require_once './models/UserModel.php';
require_once 'controllers/UserController.php';
require_once './models/MovieModel.php';
require_once 'controllers/MovieController.php';
require_once 'controllers/HomeController.php';
$request_uri = $_SERVER['REQUEST_URI'];
$uri_segments = explode('/', trim($request_uri, '/'));
$homeController = new HomeController();
// Define routes
$route = $uri_segments[1] ?? '';

switch ($route) {
    
    case '':
        // base route
        require_once 'lala.php';
        // $controller = new HomeController();
        // $controller->index();
        break;
    case 'home':
        $homeController->getHome();
        break;
    case 'aboutUs':
        $homeController->getAbout();
        break;

    case 'contactUs':
        $homeController->getContact();
        break;

    case 'search-movies':
        //Search movies route
        $MovieModel = new MovieModel($conn);
        $controller = new MovieController($MovieModel);
        $controller->searchMovies();
        break;
    case 'movies':
        // Movies route
        $MovieModel = new MovieModel($conn);
        $controller = new MovieController($MovieModel);
        if(isset($uri_segments[2])){
            // exmple /Movies_App/movies/2 
            // this gets a single movie
            $controller->showSingleMovie($uri_segments[2]);
        }
        else{
            $controller->showMovies();
        }
        
        break;
        // Movies route
        $MovieModel = new MovieModel($conn);
        $controller = new MovieController($MovieModel);
        $controller->showMovies();
        break;

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
        break;

    case 'admin':
        $MovieModel = new MovieModel($conn);
        $controller = new MovieController($MovieModel);
        if (isset($uri_segments[2])) {

            switch ($uri_segments[2]) {
                case 'addMovie':
                    $controller->ShowAddMovie();
                    break;
                case 'deleteMovie':
                    if (isset($uri_segments[3])) {
                        $controller->deleteMovie($uri_segments[3]);
                        break;
                    } else {
                        header('Location:/Movies_App/admin');
                        break;
                    }
                case 'editMovie':
                    if (isset($uri_segments[3])) {
                        $controller->showEditMovie($uri_segments[3]);
                        break;
                    } else {
                        header('Location:/Movies_App/admin');
                        break;
                    }

            }

        }
        else{
            $controller->showMoviesAdmin();
            break;
        }

    default:
    // // Handle other routes
    // require_once 'controllers/ErrorController.php';
    // $controller = new ErrorController();
    // $controller->notFound();
    // break;
}
