<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1" />

  <title>Movie Review | About</title>

  <!-- Loading third party fonts -->
  <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css" />
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <!-- Loading main css file -->
  <link rel="stylesheet" href="css/viewstyles.css" />

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
            <li class="menu-item ">
              <a href="home">Home</a>
            </li>
            <li class="menu-item"><a href="movies">Movie List</a></li>
            <li class="menu-item current-menu-item"><a href="aboutUs">About</a></li>
            <li class="menu-item"><a href="contactUs">Contact</a></li>
            <li class="menu-item"><a href="change-password">Profile</a></li>
          </ul>
          <!-- .menu -->


        </div>
        <!-- .main-navigation -->

        <div class="mobile-navigation"></div>
      </div>
    </header>
    <main class="main-content">
      <div class="container">
        <div class="page">
          <div class="breadcrumbs">
            <a href="home">Home</a>
            <span>About us</span>
          </div>

          <div class="row">
            <div class="col-md-4">
              <figure>
                <img src="images/red-carpet.jpg" alt="figure image" />
              </figure>
            </div>
            <div class="col-md-8">
              <p class="leading">The best Movie Website of its kind!!!</p>
              <p>
                Step into the captivating and multifaceted world of movie
                production, where creativity, innovation, and storytelling
                converge to shape the films that inspire, entertain, and
                resonate with audiences worldwide. Our platform invites you on
                an immersive journey, peeling back the curtain on the artistry
                and craftsmanship that bring cinematic masterpieces to life.
                From the inception of an idea to the final cut on the big
                screen, join us as we navigate the intricate landscape of
                movie-making. Delve into the genesis of scripts, witnessing
                the birth of narratives that transport us to new dimensions
                and evoke profound emotions. Explore the diverse avenues of
                pre-production, where visionaries meticulously lay the
                groundwork, casting the vision that will soon unfold before
                our eyes.
              </p>
              <p>
                Venture deeper into the heart of production, where the magic
                truly unfolds. Experience the synergy of directors, actors,
                cinematographers, and an army of creative talents harmoniously
                weaving their expertise to craft scenes that leave an
                indelible mark on our memories. Peek into the technical
                prowess behind special effects, the meticulous choreography of
                stunts, and the artistry of set design, all converging to
                create an immersive cinematic experience. But our journey
                doesn’t end there. Traverse the post-production landscape,
                where the meticulous editing process refines raw footage into
                a seamless narrative, complemented by mesmerizing soundscapes
                and captivating visual effects. Witness the birth of iconic
                scores that resonate in our minds long after the credits roll.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9">
              <h2 class="section-title">Vision &amp; Mission</h2>
              <p>
                To curate an immersive cinematic experience by offering a
                diverse and comprehensive collection of movies, fostering
                community engagement, and providing a user-friendly platform
                that celebrates the art of storytelling through film.
              </p>
              <p>
                Empowering global audiences to explore, connect, and be
                inspired through a seamless digital hub that showcases the
                richness of cinematic storytelling. We envision becoming the
                go-to destination that not only entertains but also educates,
                connects, and amplifies the universal language of movies,
                enhancing appreciation for diverse cultures and perspectives.
              </p>
            </div>
            <div class="col-md-3">
              <h2 class="section-title">Useful Links</h2>
              <ul class="arrow">
                <li>
                  <a href="https://www.imdb.com/board" target="_blank">IMDb Forums - Community and Forums</a>
                </li>
                <li>
                  <a href="https://www.netflix.com" target="_blank">Netflix - Streaming Platform</a>
                </li>
                <li>
                  <a href="https://www.amazon.com/primevideo" target="_blank">Amazon Prime Video - Streaming
                    Platform</a>
                </li>
                <li>
                  <a href="https://www.hulu.com" target="_blank">Hulu - Streaming Platform</a>
                </li>
                <li>
                  <a href="https://www.rottentomatoes.com" target="_blank">Rotten Tomatoes - Reviews and Ratings</a>
                </li>
                <li>
                  <a href="https://www.metacritic.com" target="_blank">Metacritic - Reviews and Ratings</a>
                </li>
                <li>
                  <a href="https://www.variety.com" target="_blank">Variety - Articles and Blogs</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .row -->
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
        </div>
        <!-- .row -->

        <div class="colophon">
          Copyright 2014 Company name, Designed by Themezy. All rights
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
  <!-- Include Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/6b3534180a.js" crossorigin="anonymous"></script>

</body>

</html>