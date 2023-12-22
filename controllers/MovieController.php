<?php
class MovieController
{

    public $name;
    public $genre;

    public $release_date;

    public $director;

    public $cover_photo;

    public $movieId;

    public $length;

    public $movieModel;

    public function __construct($movieModel)
    {
        // $this->db = $conn;
        $this->movieModel = $movieModel;
    }

    public function showMovies()
    {
        session_start();
        if (isset($_SESSION["email"])) {
            $movies = $this->movieModel->getAllMovies();
            include "views/movies/moviesList.php";
        } else {
            header("Location:/Movies_App/login");
        }

    }

    public function showMoviesAdmin()
    {
        session_start();
        if (isset($_SESSION["email"]) && isset($_SESSION["role"])) {
            $movies = $this->movieModel->getAllMovies();
            include "views/admin/showMovies.php";
        } else {
            header("Location:/Movies_App/login");
        }
    }

    public function deleteMovie($movieId)
    {
        session_start();
        include_once "models/UserModel.php";

        if (!isset($_SESSION["email"]) || !isset($_SESSION["role"])) {

            header('Location:/Movies_App/login');
            return;
        }

        if (isset($_POST["deleteMovie-submit"])) {
            if ($this->deleteMovieById($movieId) === true) {
                header('Location:/Movies_App/admin');
            } else {

                echo "Failed to delete the movie.";
            }
        } else {

            include 'views/admin/showMovies.php';
        }
    }

    private function deleteMovieById($movieId)
    {
        return $this->movieModel->deleteMovie($movieId);
    }

    public function ShowAddMovie()
    {
        session_start();

        if (!isset($_SESSION["email"]) || !isset($_SESSION["role"])) {
            header('Location:/Movies_App/login');
            return;
        }

        if (isset($_POST["addMovie-submit"])) {
            if ($this->addMovie() === true) {
                header('Location:/Movies_App/admin');
            } else {
                $name = isset($this->name) ? $this->name : '';
                $genre = isset($this->genre) ? $this->genre : '';
                $release_date = isset($this->release_date) ? $this->release_date : '';
                $director = isset($this->director) ? $this->director : '';
                $cover_photo = isset($this->cover_photo) ? $this->cover_photo : '';
                $length = isset($this->length) ? $this->length : '';
                $error = 'Movie Name must be unique';
                include 'views/admin/addMovie.php';
            }
        } else {
            include 'views/admin/addMovie.php';
        }
    }

    public function addMovie()
    {
        // $this->movieModel->addMovie();
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->name = $_POST['name'];
            $this->genre = $_POST['genre'];
            $this->release_date = $_POST['release_date'];
            $this->director = $_POST['director'];
            $this->cover_photo = $_POST['cover_photo'];
            $this->length = $_POST['length'];
            $movie = array("name" => $this->name, "length" => $this->length, "genre" => $this->genre, "release_date" => $this->release_date, "director" => $this->director, "cover_photo" => $this->cover_photo
            );

            if ($this->movieModel->createMovie($movie)) {
                return true;
            } else {
                return false;
            }

        }

    }
    public function showEditMovie($movieId)
    {
        session_start();

        if (!isset($_SESSION["email"]) || !isset($_SESSION["role"])) {
            header('Location:/Movies_App/login');
            return;
        }

        if (isset($_POST["editMovie-submit"])) {
            if ($this->editMovie($movieId) === true) {
                header('Location:/Movies_App/admin');
            } else {
                $movieId = isset($this->movieId) ? $this->movieId : '';
                $name = isset($this->name) ? $this->name : '';
                $genre = isset($this->genre) ? $this->genre : '';
                $release_date = isset($this->release_date) ? $this->release_date : '';
                $director = isset($this->director) ? $this->director : '';
                $cover_photo = isset($this->cover_photo) ? $this->cover_photo : '';
                $length = isset($this->length) ? $this->length : '';
                $error = 'Movie Name must be unique';
                include 'views/admin/editMovie.php';
            }
        } else {
            $movie = $this->movieModel->getMovieByID($movieId);
            $movieId = $this->movieId = $movie['Movie_ID'];
            $name = $this->name = $movie['Name'];
            $genre = $this->genre = $movie['Genre'];
            $release_date = $this->release_date = $movie['Release_Date'];
            $director = $this->director = $movie['Director'];
            $cover_photo = $this->cover_photo = $movie['cover_photo'];
            $length = $this->length = $movie['Length'];
            // print_r($movie);
            include 'views/admin/editMovie.php';
        }
    }

    public function editMovie($movieId)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->name = $_POST['name'];
            $this->genre = $_POST['genre'];
            $this->release_date = $_POST['release_date'];
            $this->director = $_POST['director'];
            $this->cover_photo = $_POST['cover_photo'];
            $this->length = $_POST['length'];
            $this->movieId = $movieId;
            $movie = array("Movie_ID" => $this->movieId, "name" => $this->name, "genre" => $this->genre, "release_date" => $this->release_date, "director" => $this->director, "cover_photo" => $this->cover_photo, "length" => $this->length
            );

            if ($this->movieModel->editMovie($movie)) {
                return true;
            } else {
                return false;
            }

        }
    }

    public function showSingleMovie($movieId){
        $movie = $this->movieModel->getMovieByID($movieId);
        include "views/movies/singleMovie.php";
    }

    public function searchMovies()
    {
        $search = $_POST["searchTerm"];
        $movies = $this->movieModel->searchMoviesByName($search);
        print_r($movies);
        include "views/movies/showMovies.php";
    }
}

?>