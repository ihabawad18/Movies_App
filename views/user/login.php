
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
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
            max-width: 300px;
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
    </style>
</head>

<body>

    <h1>Login</h1>
    <form id="login-form" action="/Movies_App/login" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"
            value="<?php if(isset($email)) echo htmlspecialchars($email) ?>" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"
            value="<?php if(isset($password)) echo htmlspecialchars($password) ?>" required>
        <input type="hidden" name="login-submit" value="1">
        <button name="submit" value="submit" type="submit">Login</button>
        <a href="/Movies_App/register">
            <button type="button">Register</button>
        </a>
    </form>
    
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