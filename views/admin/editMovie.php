<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include Uploadcare Widget -->
    <script charset="utf-8" src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js"></script>

    <!-- Include the LR File Uploader CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@uploadcare/blocks@0.30.5/web/lr-file-uploader-regular.min.css">
    <script>
        UPLOADCARE_PUBLIC_KEY = 'b16baaf71489f7828e77';
    </script>

<link rel="stylesheet" href="../../css/viewstyles.css" />


    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style> -->
</head>

<body>
<div id="site-content">
			<header class="site-header">
				<div class="container">
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
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="adminview.html">Admin View</a></li>
						</ul> <!-- .menu -->

						<form action="#" class="search-form">
							<input type="text" placeholder="Search...">
							<button><i class="fa fa-search"></i></button>
						</form>n><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
                        <div class="breadcrumbs">
							<a href="index.html">Home</a>
							<a href="adminview.html">Admin View</a>
							
							<span>Update movie</span>
						</div>

						<div class="content">
							
    <form method="post" action="/Movies_App/admin/editMovie/<?php echo $movieId?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php if(isset($name)) echo htmlspecialchars($name) ?>" required>

        <label for="genre">Genre:</label>
        <input type="text" name="genre" value="<?php if(isset($genre)) echo htmlspecialchars($genre) ?>" required>

        <label for="length">Length:</label>
        <input type="text" name="length" value="<?php if(isset($length)) echo htmlspecialchars($length) ?>" >

        <label for="release_date">Release Date:</label>
        <input type="date" name="release_date" value="<?php if(isset($release_date)) echo htmlspecialchars($release_date) ?>" required>

        <label for="director">Director:</label>
        <input type="text" name="director" value="<?php if(isset($director)) echo htmlspecialchars($director) ?>" required>

        <!-- Use LR File Uploader instead of the previous button -->
        <lr-file-uploader-regular ctx-name="my-uploader" pubkey="b16baaf71489f7828e77" value="<?php if(isset($cover_photo)) echo htmlspecialchars($cover_photo) ?>"></lr-file-uploader-regular>

        <!-- Include an input field to store the CDN URL -->
        <input type="hidden" name="cover_photo" role="uploadcare-uploader" />

        <!-- Add the form submit button -->
        <button type="submit" name="editMovie-submit">Update Movie</button>
    </form>
							
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

					<div class="colophon">Copyright 2014 Company name, Designed by Themezy. All rights reserved</div>
				</div> <!-- .container -->

			</footer>
		</div>
		<!-- Default snippet for navigation -->
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		 <!-- Include the LR File Uploader JavaScript -->
         <script type="module">
        import * as LR from 'https://cdn.jsdelivr.net/npm/@uploadcare/blocks@0.30.5/web/lr-file-uploader-regular.min.js';
        LR.registerBlocks(LR);
    </script>
	</body>




   
<!-- </body> -->

</html>


