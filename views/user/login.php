<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form id="login-form" action="/Movies_App/login" method="post" style="padding:20px">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="email" id="email" name="email" class="login__input" placeholder="Email"
                            value="<?php if (isset($email))
                                echo htmlspecialchars($email) ?>" required>
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-lock"></i>
                            <input type="password" id="password" name="password" class="login__input" placeholder="Password"
                                value="<?php if (isset($password))
                                echo htmlspecialchars($password) ?>" required>
                            <input type="hidden" name="login-submit" value="1">
                        </div>
                        <button class="button login__submit">

                            <a class="button__text" href="index.html">Log In Now</a>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>
                        <br>

                        <p style="color: rgb(1, 27, 49);">Don't have an account? </p>

                        <button class="button Signin__submit"><a class="button__text_signin" href="/Movies_App/register">
                                SignUp Here
                            </a>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>

                    </form>

                </div>
                <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
                </div>
            </div>
        </div>

        <!-- <h1>Login</h1>
    <form id="login-form" action="/Movies_App/login" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"
            value="<?php if (isset($email))
                                echo htmlspecialchars($email) ?>" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"
            value="<?php if (isset($password))
                                echo htmlspecialchars($password) ?>" required>
        <input type="hidden" name="login-submit" value="1">

        <button name="submit" value="submit" type="submit">Login</button>
        <a href="/Movies_App/register">
            <button type="button">Register</button>
        </a>
    </form> -->

        <!-- jquery  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- <script>
        $(document).ready(function () {
            $("#login-form").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: "/Movies_App/login",
                    data: $(this).serialize(),
                    success: function (response) {
                        console.log(response); 
                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX Error: ' + status + ' ' + error);
                    }
                });
            });
        });
    </script> -->

    </body>

    </html>