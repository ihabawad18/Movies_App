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

    <style>
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
    </style>
</head>

<body>
    <form method="post" action="/Movies_App/admin/addMovie">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php if(isset($name)) echo htmlspecialchars($name) ?>" required>

        <label for="genre">Genre:</label>
        <input type="text" name="genre" value="<?php if(isset($genre)) echo htmlspecialchars($genre) ?>" required>

        <label for="release_date">Release Date:</label>
        <input type="date" name="release_date" value="<?php if(isset($release_date)) echo htmlspecialchars($release_date) ?>" required>

        <label for="director">Director:</label>
        <input type="text" name="director" value="<?php if(isset($director)) echo htmlspecialchars($director) ?>" required>
        <label for="length">Length of the movie:</label>
        <input type="text" name="length" value="<?php if(isset($length)) echo htmlspecialchars($length) ?>" required>

        <!-- Use LR File Uploader instead of the previous button -->
        <lr-file-uploader-regular ctx-name="my-uploader" pubkey="b16baaf71489f7828e77" value="<?php if(isset($cover_photo)) echo htmlspecialchars($cover_photo) ?>"></lr-file-uploader-regular>

        <!-- Include an input field to store the CDN URL -->
        <input type="hidden" name="cover_photo" role="uploadcare-uploader" />

        <!-- Add the form submit button -->
        <button type="submit" name="addMovie-submit">Add Movie</button>
    </form>

    <!-- Include the LR File Uploader JavaScript -->
    <script type="module">
        import * as LR from 'https://cdn.jsdelivr.net/npm/@uploadcare/blocks@0.30.5/web/lr-file-uploader-regular.min.js';
        LR.registerBlocks(LR);
    </script>
</body>

</html>