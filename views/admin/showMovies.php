<?php 
    echo "here is the movie list section from admin side";
    echo "admin view here with the edit and delete buttons"

?>
<!-- Here we create the admin table -->
<!-- nav bar to logout or ADD A movie-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movies Table</title>
    <!-- Any additional head content (stylesheets, scripts) can go here -->

    <head>
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
	

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>





    <style>
        /* Styles for the navigation bar */
        nav {
          
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-movie-btn {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            display: flex;
            align-items: center;
        }

        .add-movie-btn i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <nav>
        <div></div>
        <a href="addmovie.html" class="add-movie-btn">
            <i class="fas fa-plus"></i>Add Movie
        </a>
    </nav>
    <main class="main-content">
        <div class="container">
            <div class="page">
                <?php


                if ($movies) {
                    echo '<table>';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Name</th>';
                    echo '<th>Genre</th>';
                    echo '<th>Movie Length</th>';
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
                        echo '<td>' . $movie['length'] . '</td>';
                        echo '<td>' . $movie['Release_Date'] . '</td>';
                        echo '<td>' . $movie['Director'] . '</td>';
                        echo '<td><img src="' . $movie['cover_photo'] . '" alt="Movie Cover Photo"></td>';
                
                        // Actions column with Delete and Edit buttons
                        echo '<td>';
                        echo '<a href="edit/' . $movie['Movie_ID'] . '" class="btn btn-sm btn-primary me-1">Edit</a>';
                        echo '<a href="delete/' . $movie['Movie_ID'] . '" class="btn btn-sm btn-danger">Delete</a>';
                        echo '</td>';
                
                        echo '</tr>';
                    }
                
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo 'No movies found.';
                }
                ?>
</div>
</div>
    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">About Us</h3>
                        <p>REELSCAPE HUB is your ultimate gateway to the world of cinema. Founded in 2023 by a team of movie enthusiasts, we aim to bring the magic of the movies right to your fingertips.</p>
                    </div>
                </div>
          
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Help Center</h3>
                        <ul class="no-bullet">
                            <li>Account Assistance</li>
                            <li>Troubleshooting and FAQs</li>
                            <li>Contacting Support</li>
                            <li>Navigating the Website</li>
                          </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Join Us</h3>
                        <ul class="no-bullet">
                            <li>Personalized Recommendations</li>
                            <li>Community Engagement</li>
                            <li>Exclusive Content</li>
                            <li>Virtual Watch Parties</li>
                          </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Social Media</h3>
                        <ul class="no-bullet">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Google+</a></li>
                            <li><a href="#">Pinterest</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Newsletter</h3>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Email Address">
                        </form>
                    </div>
                </div>
            </div> <!-- .row -->
    
            <div class="colophon">Copyright 2023 ReelScape Hub, Designed by WebMasters. All rights reserved</div>
        </div> <!-- .container -->
    
    </footer>

    <!-- Include Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>
