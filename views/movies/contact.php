<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0,maximum-scale=1"
    />

    <title>Movie Review | Contact</title>

    <!-- Loading third party fonts -->
    <link
      href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|"
      rel="stylesheet"
      type="text/css"
    />
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
              <li class="menu-item"><a href="aboutUs">About</a></li>
              <li class="menu-item current-menu-item"><a href="contactUs">Contact</a></li>
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
              <a href="home">Home</a>
              <span>Contact</span>
            </div>

            <div class="content">
              <div class="row">
                <div class="col-md-4">
                  <h2>Contact</h2>
                  <ul class="contact-detail">
                    <li>
                      <img src="images/icon-contact-map.png" alt="#" />
                      <address>
                        <span>ReelScape Hub. INC</span> <br />Beirut, Lebanon
                      </address>
                    </li>
                    <li>
                      <img src="images/icon-contact-phone.png" alt="" />
                      <a href="tel:1590912831">+1 590 912 831</a>
                    </li>
                    <li>
                      <img src="images/icon-contact-message.png" alt="" />
                      <a href="mailto:contact@reelscape.com"
                        >contact@reelscape.com</a
                      >
                    </li>
                  </ul>
                  <div class="contact-form">
                    <input type="text" class="name" placeholder="name..." />
                    <input type="text" class="email" placeholder="email..." />
                    <input
                      type="text"
                      class="website"
                      placeholder="website..."
                    />
                    <textarea
                      class="message"
                      placeholder="message..."
                    ></textarea>
                    <input type="submit" value="Send Message " />
                  </div>
                </div>
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
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia
                  tempore vitae mollitia nesciunt saepe cupiditate
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
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
