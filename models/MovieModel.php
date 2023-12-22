<?php
class MovieModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllMovies()
    {
        try {
            $sql = "SELECT * FROM movies";
            $stmt = $this->db->query($sql);

            $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $movies;
        } catch (Exception $e) {
            // echo $sql . "<br>" . $e->getMessage();
            return false;
        }
    }

    public function createMovie($movie)
    {
        print_r($movie);
        try {
            $name = $this->db->quote($movie['name']);
            $genre = $this->db->quote($movie['genre']);
            $release_date = $this->db->quote($movie['release_date']);
            $director = $this->db->quote($movie['director']);
            $length = $this->db->quote($movie['length']);
            // Check if cover_photo is an empty string
            $cover_photo = empty($movie['cover_photo']) ? '' : $this->db->quote($movie['cover_photo']);

            $sql = "INSERT INTO movies (Name, Genre, Release_Date, Director, Length";

            // Only include cover_photo in the column list if it's not empty
            if (!empty($movie['cover_photo'])) {
                $sql .= ", cover_photo";
            }

            $sql .= ") VALUES ($name, $genre, $release_date, $director, $length";

            // Only include cover_photo in the values if it's not empty
            if (!empty($movie['cover_photo'])) {
                $sql .= ", $cover_photo";
            }

            $sql .= ")";

            $this->db->exec($sql);
            return true;
        } catch (Exception $e) {
            // echo $sql . "<br>" . $e->getMessage();
            return false;
        }
    }
    public function deleteMovie($movieId)
    {
        try {

            $sql = "DELETE FROM movies WHERE Movie_ID = $movieId";
            $this->db->exec($sql);
            return true;
        } catch (Exception $e) {
            // echo $sql . "<br>" . $e->getMessage();
            return false;
        }
    }

    public function getMovieByID($movieId)
    {
        try {
            $sql = "SELECT * FROM movies WHERE Movie_ID = :movieId";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':movieId', $movieId, PDO::PARAM_INT);
            $stmt->execute();
            $movie = $stmt->fetch(PDO::FETCH_ASSOC);
            return $movie;
        } catch (Exception $e) {
            // echo $sql . "<br>" . $e->getMessage();
            return null;
        }
    }

    public function editMovie($movie){
        try {
            $movieId = $this->db->quote($movie["Movie_ID"]);
            $name = $this->db->quote($movie['name']);
            $genre = $this->db->quote($movie['genre']);
            $release_date = $this->db->quote($movie['release_date']);
            $director = $this->db->quote($movie['director']);
            $cover_photo = $this->db->quote($movie['cover_photo']);
            $length = $this->db->quote($movie['length']);
            $sql = "UPDATE movies SET 
                    Name = $name, 
                    Genre = $genre, 
                    Release_Date = $release_date, 
                    Director = $director, 
                    cover_photo = $cover_photo,
                    length = $length 
                    WHERE Movie_ID = $movieId";

            $this->db->exec($sql);
            return true;
        } catch (Exception $e) {
            // echo $sql . "<br>" . $e->getMessage();
            return false;
        }
    }

    public function searchMoviesByName($searchTerm) {
        try {
            $searchTerm = $this->db->quote("%$searchTerm%");
    
            $sql = "SELECT * FROM movies WHERE Name LIKE $searchTerm";
            $stmt = $this->db->query($sql);
            $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            return $movies;
        } catch (Exception $e) {
            // echo $sql . "<br>" . $e->getMessage();
            return false;
        }
    }

}

?>