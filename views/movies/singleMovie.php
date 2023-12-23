<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Movie Review | Single</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/viewstyles.css">

    <!--[if lt IE 9]>
        <script src="js/ie-support/html5.js"></script>
        <script src="js/ie-support/respond.js"></script>
        <![endif]-->

</head>


<body>


    <div id="site-content">
        <header class="site-header">
            <div class="container">
                <div class="logout-button">
                    <?php
                    session_start();
                    if (isset($_SESSION["role"])) {
                        echo "<a href='/Movies_App/admin' class=''>Admin Portal<i class='fa-solid fa-user-tie' style='margin-left:5px'></i></a>";
                    }
                    ?>

                    <a href="/Movies_App/logout" class="logout-link">Logout<i class="fa-solid fa-right-from-bracket"
                            style="margin-left:5px"></i></a>
                </div>
                <a href="index.html" id="branding">
                    <img src="../images/logo.png" alt="" class="logo">
                    <div class="logo-copy">
                        <h1 class="site-title">ReelScape Hub</h1>
                        <small class="site-description">Hollywood Magic</small>
                    </div>
                </a> <!-- #branding -->

                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="/Movies_App/home">Home</a></li>
                        <li class="menu-item current-menu-item"><a href="movies">Movie List</a></li>
                        <li class="menu-item"><a href="/Movies_App/aboutUs">About</a></li>
                        <li class="menu-item"><a href="/Movies_App/contactUs">Contact</a></li>
                        <li class="menu-item"><a href="/Movies_App/change-password">Profile</a></li>
                    </ul> <!-- .menu -->

                </div> <!-- .main-navigation -->

                <div class="mobile-navigation"></div>
            </div>
        </header>
        <main class="main-content">
            <div class="container">
                <div class="page">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a>
                        <a href="moviesList.html">Movie description</a>
                        <span>
                            <?php echo $movie['Name'] ?>
                        </span>
                    </div>

                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <figure class="movie-poster custom-poster"><img
                                        src="<?php echo $movie['cover_photo'] ?>" alt="#">
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <h2 class="movie-title">
                                    <?php echo $movie['Name'] ?>
                                </h2>
                                <div class="movie-summary">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>

                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                                        sed.</p>
                                </div>
                                <ul class="movie-meta">
                                    <li><strong>Rating:</strong>
                                        <div class="star-rating" title="Rated 4.00 out of 5"><span
                                                style="width:80%"><strong class="rating">4.00</strong> out of 5</span>
                                        </div>
                                    </li>
                                    <li><strong>Length:</strong>
                                        <?php echo $movie['Length'] ?>
                                    </li>
                                    <li><strong>Genre:</strong>
                                        <?php echo $movie['Genre'] ?>
                                    </li>
                                    <li><strong>Director:</strong>
                                        <?php echo $movie['Director'] ?>
                                    </li>



                                </ul>
                            </div>
                        </div> <!-- .row -->

                    </div>
                </div>
            </div> <!-- .container -->
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="widget">
                            <h3 class="widget-title">About Us</h3>
                            <p>REELSCAPE HUB is your ultimate gateway to the world of cinema. Founded in 2023 by a team
                                of movie enthusiasts, we aim to bring the magic of the movies right to your fingertips.
                            </p>
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
                                <li>Facebook</li>
                                <li>Twitter</li>
                                <li>Google+</li>
                                <li>Pinterest</li>
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

                <div class="colophon">Copyright 2023 REELSCAPE HUB, All rights reserved</div>
            </div> <!-- .container -->

        </footer>
    </div>
    <!-- Default snippet for navigation -->



    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    <!-- Include Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/6b3534180a.js" crossorigin="anonymous"></script>


</body>

</html>