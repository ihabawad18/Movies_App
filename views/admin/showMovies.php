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
        <link rel="stylesheet" href="css/viewstyles.css">

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
    <header class="site-header">
        <div class="container">
            <div class="logout-button">
                <?php
                // session_start();
                if (isset($_SESSION["role"])) {
                    echo "<a href='/Movies_App/admin' class=''>Admin Portal<i class='fa-solid fa-user-tie' style='margin-left:5px'></i></a>";
                }
                ?>

                <a href="/Movies_App/logout" class="logout-link">Logout<i class="fa-solid fa-right-from-bracket"
                        style="margin-left:5px"></i></a>
            </div>
            <a href="index.html" id="branding">
                <img src="images/logo.png" alt="" class="logo">
                <div class="logo-copy">
                    <h1 class="site-title">ReelScape Hub</h1>
                    <small class="site-description">Hollywood Magic</small>
                </div>
            </a> <!-- #branding -->

            <div class="main-navigation">
                <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                <ul class="menu">
                    <li class="menu-item"><a href="home">Home</a></li>
                    <li class="menu-item"><a href="/Movies_App/admin">Admin View</a></li>
                    <li class="menu-item"><a href="/Movies_App/admin/addMovie"> <i class="fas fa-plus"
                                style="margin-right:3px"></i>Add Movie</a></li>
                </ul> <!-- .menu -->

            </div> <!-- .main-navigation -->

            <div class="mobile-navigation"></div>
        </div>
    </header>
    </div>

    <!-- #branding -->

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
                        echo '<td>' . $movie['Length'] . '</td>';
                        echo '<td>' . $movie['Release_Date'] . '</td>';
                        echo '<td>' . $movie['Director'] . '</td>';
                        echo '<td><img src="' . $movie['cover_photo'] . '" alt="Movie Cover Photo"></td>';

                        // Actions column with Delete and Edit buttons
                        echo '<td>';
                        echo "<form action='admin/deleteMovie/{$movie['Movie_ID']}' class='custom-form' method='POST'>
                                <input type='hidden' name='deleteMovie-submit'>
                                <button type='submit' class='btn btn-sm btn-danger' >Delete</button>
                            </form>";
                        echo "<form action='admin/editMovie/{$movie['Movie_ID']}' class='custom-form' method='POST'>
                            <input type='hidden' name='addMovie-submit'>
                            <button type='submit' class='btn btn-sm btn-danger' >Edit</button>
                        </form>";


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
                        <p>REELSCAPE HUB is your ultimate gateway to the world of cinema. Founded in 2023 by a team of
                            movie enthusiasts, we aim to bring the magic of the movies right to your fingertips.</p>
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
    <script src="https://kit.fontawesome.com/6b3534180a.js" crossorigin="anonymous"></script>
</body>

</html>