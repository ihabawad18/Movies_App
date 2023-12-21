<?php 
    echo "here is the movie list section <br>";

?>

<form method="post" action="/Movies_App/search-movies">
    <label for="searchTerm">Search Movies:</label>
    <input type="text" name="searchTerm" required>
    <button type="submit">Search</button>
</form>