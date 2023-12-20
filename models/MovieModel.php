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
            echo $sql . "<br>" . $e->getMessage();
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

            // Check if cover_photo is an empty string
            $cover_photo = empty($movie['cover_photo']) ? '' : $this->db->quote($movie['cover_photo']);

            $sql = "INSERT INTO movies (Name, Genre, Release_Date, Director";

            // Only include cover_photo in the column list if it's not empty
            if (!empty($movie['cover_photo'])) {
                $sql .= ", cover_photo";
            }

            $sql .= ") VALUES ($name, $genre, $release_date, $director";

            // Only include cover_photo in the values if it's not empty
            if (!empty($movie['cover_photo'])) {
                $sql .= ", $cover_photo";
            }

            $sql .= ")";

            $this->db->exec($sql);
            return true;
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
    }

}

?>