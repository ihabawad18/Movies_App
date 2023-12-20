<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <style>
        /* Add your styles here */
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

    <h1>Change Password</h1>
    <form id="change-pass-form" action="/Movies_App/change-password" method="post">
        <label for="oldPassword">Old Password:</label>
        <input type="password" id="oldPassword" name="oldPassword" value="<?php if(isset($oldPassword)) echo htmlspecialchars($oldPassword)  ?>" required>

        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword" value="<?php if(isset($newPassword)) echo htmlspecialchars($newPassword) ?>" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" value="<?php if(isset($confirmPassword)) echo htmlspecialchars($confirmPassword) ?>" required>

        <input type="hidden" name="change-pass-submit" value="1">
        <button name="submit" value="submit" type="submit">Change Password</button>
    </form>

    <!-- Add any additional content or scripts here -->

</body>

</html>
