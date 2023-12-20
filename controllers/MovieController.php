<?php
class MovieController
{

    public $name;
    public $genre;

    public $release_date;

    public $director;

    public $cover_photo;

    public $movieModel;
    public function __construct($movieModel)
    {
        // $this->db = $conn;
        $this->movieModel = $movieModel;
    }

    public function showMovies()
    {
        session_start();
        if(isset($_SESSION["email"])){
            $movies = $this->movieModel->getAllMovies();
            include "views/movies/showMovies.php";
        }
        else{
            header("Location:/Movies_App/login");
        }
        
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
                header('Location:/Movies_App');
            } else {
                $name = isset($this->name) ? $this->name : '';
                $genre = isset($this->genre) ? $this->genre : '';
                $release_date = isset($this->release_date) ? $this->release_date : '';
                $director = isset($this->director) ? $this->director : '';
                $cover_photo = isset($this->cover_photo) ? $this->cover_photo : '';
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

            $movie = array("name" => $this->name, "name" => $this->name, "genre" => $this->genre, "release_date" => $this->release_date, "director" => $this->director, "cover_photo" => $this->cover_photo
            );

            if ($this->movieModel->createMovie($movie)) {
                return true;
            }
            else{
                return false;
            }

        }

    }
}

?>