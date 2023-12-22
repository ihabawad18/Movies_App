<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0,maximum-scale=1"
    />

    <title>Movie Review | Review</title>

    <!-- Loading third party fonts -->
    <link
      href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|"
      rel="stylesheet"
      type="text/css"
    />
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Loading main css file -->
    <link rel="stylesheet" href="../../css/viewstyles.css" />

    <!--[if lt IE 9]>
      <script src="js/ie-support/html5.js"></script>
      <script src="js/ie-support/respond.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="site-content">
      <header class="site-header">
        <div class="container">
          <a href="index.html" id="branding">
            <img src="images/logo.png" alt="" class="logo" />
            <div class="logo-copy">
              <h1 class="site-title">ReelScape Hub</h1>
              <small class="site-description">Hollywood Magic</small>
            </div>
          </a>
          <!-- #branding -->

          <div class="main-navigation">
            <button type="button" class="menu-toggle">
              <i class="fa fa-bars"></i>
            </button>
            <ul class="menu">
              <li class="menu-item current-menu-item">
                <a href="index.html">Home</a>
              </li>
              <li class="menu-item"><a href="moviesList.html">Movie List</a></li>
              <li class="menu-item"><a href="about.html">About</a></li>
              <li class="menu-item"><a href="contact.html">Contact</a></li>
              <li class="menu-item"><a href="userProfile.html">Profile</a></li>
            </ul>
            <!-- .menu -->

            <form action="#" class="search-form">
              <input type="text" placeholder="Search..." />
              <button><i class="fa fa-search"></i></button>
            </form>
          </div>
          <!-- .main-navigation -->

          <div class="mobile-navigation"></div>
        </div>
      </header>
      <main class="main-content">
        <div class="container">
          <div class="page">
            <div class="breadcrumbs">
              <a href="index.html">Home</a>
              <span>Movie Review</span>
            </div>

            <div class="filters">
              <select name="#" id="#" placeholder="Choose Category">
                <option value="#">Action</option>
                <option value="#">Drama</option>
                <option value="#">Fantasy</option>
                <option value="#">Horror</option>
                <option value="#">Adventure</option>
              </select>
              <select name="#" id="#">
                <option value="#">2012</option>
                <option value="#">2013</option>
                <option value="#">2014</option>
              </select>
            </div>
            <div class="movie-list">
            <!--  <?php foreach ($movies as $movie): ?>
              <div class="movie">
                <figure class="movie-poster">
                  <img
                    src="<?php echo $movie['image_path']; ?>"
                    alt="<?php echo $movie['title']; ?>"
                  />
                </figure>
                <div class="movie-title">
                  <a href="single.html"><?php echo $movie['title']; ?></a>
                </div>
                <p>
                  <?php echo $movie['description']; ?>
                </p>
              </div>
              <?php endforeach; ?>
            </div>-->
            <!-- .movie-list -->

            <div class="pagination">
              <a href="#" class="page-number prev"
                ><i class="fa fa-angle-left"></i
              ></a>
              <a href="moviesList.html" class="page-number">1</a>
              <a href="moviesList2.html" class="page-number">2</a>
              <a href="moviesList3.html" class="page-number">3</a>
              <span class="page-number current">4</span>
              
              
              <a href="moviesList5.html" class="page-number">5</a>
              <a href="moviesList6.html" class="page-number next"
                ><i class="fa fa-angle-right"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- .container -->
      </main>
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div class="widget">
                <h3 class="widget-title">About Us</h3>
                <p>
                  REELSCAPE HUB is your ultimate gateway to the world of cinema.
                  Founded in 2023 by a team of movie enthusiasts, we aim to
                  bring the magic of the movies right to your fingertips.
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
                  <input type="text" placeholder="Email Address" />
                </form>
              </div>
            </div>
          </div>
          <!-- .row -->

          <div class="colophon">
            Copyright 2023 ReelScape Hub, Designed by WebMasters. All rights
            reserved
          </div>
        </div>
        <!-- .container -->
      </footer>
    </div>
    <!-- Default snippet for navigation -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
