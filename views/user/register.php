<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/error.css">

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
  <link rel="stylesheet" href="css/log.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  




  
  <title>Registration Form</title>
  <style>
    /* Add this style to your existing CSS or in a separate stylesheet */
    #dob {
      width: 100%;
      height: 40px;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    #dob:hover {
      border-color: #555;
    }

    /* Style the label for better visibility */
    label[for="dob"] {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }

    /* Hide the default arrow button */
    #dob::-webkit-calendar-picker-indicator {
      display: none;
    }

    /* Customize the appearance of the date input */
    #dob {
      appearance: none;
      -moz-appearance: none;
      -webkit-appearance: none;
    }

    /* Add a background color when focused */
    #dob:focus {
      outline: none;
      border-color: purple;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>

  
    <div class="container">
      <div class="screen">
          <div class="screen__content">


    <form id="register-form" class="form" action="/Movies_App/register" method="post">
      <h1 class="title">Sign up</h1>
      <div class="inputContainer">
        <input type="text" id="firstName" name="firstName-register" class="input" placeholder="a" value="<?php if (isset($firstName))
          echo htmlspecialchars($firstName) ?>" required>
          <label for="" class="label">FirstName</label>

        </div>
        <div class="inputContainer">
          <input type="text" id="lastName" name="lastName-register" class="input" placeholder="a" value="<?php if (isset($lastName))
          echo htmlspecialchars($lastName) ?>" required>
          <label for="" class="label">LastName</label>

        </div>
        <label for="date" style="display:block;margin-bottom:3px">Birthdate</label>

        <span id="date-format"></span>
        <input type="date" id="dob" name="dob-register" aria-describedby="date-format" value="<?php if (isset($dob))
          echo htmlspecialchars($dob) ?>" required>
        <input type="hidden" name="register-submit" value="1">


        <br><br>
        <div class="inputContainer">
          <input type="email" id="email" name="email-register" class="input" placeholder="a" value="<?php if (isset($email))
          echo htmlspecialchars($email) ?>" required>
          <label for="" class="label">Email</label>
        </div>
        <div class="inputContainer">
          <input type="password" id="password" name="password-register" class="input" placeholder="a" value="<?php if (isset($password))
          echo htmlspecialchars($password) ?>" required>
          <label for="" class="label">Password</label>
        </div>
      <?php
      
        if (isset($error)) {
          echo "<div class='error-container'>$error</div>";
        }
      ?>

      <br>
      <br>
      <input type="submit" class="submitBtn" id="submitBtn" value="Sign up">
      <a href="/Movies_App/login" style="text-decoration: none;">
        <input class="submitBtn" id="submitBtn" value="Log in">
      </a>
    </form>

  </div>
  <div class="screen__background">
      <span class="screen_backgroundshape screenbackground_shape4"></span>
      <span class="screen_backgroundshape screenbackground_shape3"></span>
      <span class="screen_backgroundshape screenbackground_shape2"></span>
      <span class="screen_backgroundshape screenbackground_shape1"></span>
  </div>
</div>
</div>

  


  <!-- <h1>Registration Form</h1>
    
    <form id="register-form" action="/Movies_App/register" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email-register" value="<?php if (isset($email))
          echo htmlspecialchars($email) ?>" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password-register" value="<?php if (isset($password))
          echo htmlspecialchars($password) ?>" required>

        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName-register" value="<?php if (isset($firstName))
          echo htmlspecialchars($firstName) ?>" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName-register" value="<?php if (isset($lastName))
          echo htmlspecialchars($lastName) ?>" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob-register" value="<?php if (isset($dob))
          echo htmlspecialchars($dob) ?>" required>
        <input type="hidden" name="register-submit" value="1">

        <button type="submit">Register</button>
        <a href="/Movies_App/login">
            <button type="button">Login</button>
        </a>
    </form> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  </body>

  </html>