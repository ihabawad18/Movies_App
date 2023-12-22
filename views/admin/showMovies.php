<?php


if ($movies) {
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Genre</th>';
    echo '<th>Release Date</th>';
    echo '<th>Director</th>';
    echo '<th>Cover Photo</th>';
    echo '<th>Actions</th>'; // New column for buttons
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($movies as $movie) {
        // Access movie details using $movie array
        echo '<tr>';
        echo '<td>' . $movie['Name'] . '</td>';
        echo '<td>' . $movie['Genre'] . '</td>';
        echo '<td>' . $movie['Release_Date'] . '</td>';
        echo '<td>' . $movie['Director'] . '</td>';
        echo '<td><img src="' . $movie['cover_photo'] . '" alt="Movie Cover Photo"></td>';

        // Actions column with Delete and Edit buttons
        echo '<td>';
        echo '<a href="admin/editMovie/' . $movie['Movie_ID'] . '" class="btn btn-sm btn-primary me-1">Edit</a>';
        echo '<a href="admin/deleteMovie/' . $movie['Movie_ID'] . '" class="btn btn-sm btn-danger">Delete</a>';
        echo '</td>';

        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No movies found.';
}
?>