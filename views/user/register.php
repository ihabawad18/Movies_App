<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <title>Document</title>
  <link rel="stylesheet" href="css/styles.css">
  <title>Registration Form</title>
  <!-- <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
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

  <div class="signupFrm">
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
        <label for="date">Birthdate</label>
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



        <br>
        <br>
        <input type="submit" class="submitBtn" id="submitBtn" value="Sign up">
        <a href="/login.php" style="text-decoration: none;">
          <input type="submit" class="submitBtn" id="submitBtn" value="Log in">
        </a>
      </form>

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

  </body>

  </html>