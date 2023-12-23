<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1" />

  <title>Movie Review | Contact</title>

  <!-- Loading third party fonts -->
  <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css" />
  <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <!-- Loading main css file -->
  <link rel="stylesheet" href="style.css" />
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
          // session_start();
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
            <li class="menu-item "><a href="aboutUs">About</a></li>
            <li class="menu-item"><a href="contactUs">Contact</a></li>
            <li class="menu-item current-menu-item"><a href="change-password">Profile</a></li>
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
            <a href="/Movies_App/home">Home</a>
            <span>Profile</span>
          </div>
          <form action="/Movies_App/change-password" method="POST">
            <div class="content">
              <div class="row">
                <div class="col-md-4">
                  <h2>Update Password</h2>

                  <div class="contact-form">
                    <input type="password" class="password" id="oldPassword" name="oldPassword" value="<?php if (isset($oldPassword))
                      echo htmlspecialchars($oldPassword) ?>" required placeholder="Old password..." />
                      <input type="password" class="password" id="newPassword" name="newPassword" value="<?php if (isset($newPassword))
                      echo htmlspecialchars($newPassword) ?>" required placeholder="New password..." />
                      <input type="password" class="password" id="confirmPassword" name="confirmPassword" value="<?php if (isset($confirmPassword))
                      echo htmlspecialchars($confirmPassword) ?>" required placeholder="Confirm password..." />
                      <input type="hidden" name="change-pass-submit" value="1" />
                      <input type="submit" value="Save " />
                    </div>
                  </div>
            </form>
          </div>
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
              <p>
                Join Us at REELSCAPEHUB.com and Dive Into the World of
                Cinematic Wonders!
              </p>
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
          Copyright 2014 Company name, Designed by Themezy. All rights
          reserved
        </div>
      </div>
      <!-- .container -->
    </footer>
    </div>
    <!-- Default snippet for navigation -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
    <!-- Include Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/6b3534180a.js" crossorigin="anonymous"></script>

  </body>

  </html>